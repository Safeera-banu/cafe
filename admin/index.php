<?php
session_start();
require_once 'db.php';

$adminUsername = 'admin';
$adminPassword = 'admin123';
$error = '';

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === $adminUsername && $password === $adminPassword) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: index.php');
        exit;
    }

    $error = 'Invalid username or password.';
}

$isLoggedIn = !empty($_SESSION['admin_logged_in']);

if ($isLoggedIn && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_booking'])) {
    $bookingId = (int) ($_POST['booking_id'] ?? 0);

    if ($bookingId > 0) {
        $deleteStmt = $connection->prepare('DELETE FROM table_booking WHERE id = ?');
        $deleteStmt->bind_param('i', $bookingId);
        $deleteStmt->execute();
    }

    header('Location: index.php');
    exit;
}

$bookings = [];
$totalBookings = 0;
$todayBookings = 0;
$totalGuests = 0;
$upcomingBookings = 0;

if ($isLoggedIn) {
    $statsResult = mysqli_query(
        $connection,
        "SELECT
            COUNT(*) AS total_bookings,
            COALESCE(SUM(people), 0) AS total_guests,
            SUM(CASE WHEN booking_date = CURDATE() THEN 1 ELSE 0 END) AS today_bookings,
            SUM(CASE WHEN booking_date >= CURDATE() THEN 1 ELSE 0 END) AS upcoming_bookings
        FROM table_booking"
    );

    if ($statsResult) {
        $stats = mysqli_fetch_assoc($statsResult);
        $totalBookings = (int) $stats['total_bookings'];
        $totalGuests = (int) $stats['total_guests'];
        $todayBookings = (int) $stats['today_bookings'];
        $upcomingBookings = (int) $stats['upcoming_bookings'];
    }

    $bookingResult = mysqli_query(
        $connection,
        'SELECT id, name, phone, tableNumber, people, booking_date, booking_time, created_at
         FROM table_booking
         ORDER BY booking_date ASC, booking_time ASC, id DESC'
    );

    if ($bookingResult) {
        while ($row = mysqli_fetch_assoc($bookingResult)) {
            $bookings[] = $row;
        }
    }
}

function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard | The Daily Grind</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body class="admin-page">
  <?php if (!$isLoggedIn): ?>
    <main class="admin-login">
      <div class="login-container">
        <h1>Admin Login</h1>
        <p>Sign in to manage table bookings.</p>

        <?php if ($error): ?>
          <div class="admin-alert"><?php echo e($error); ?></div>
        <?php endif; ?>

        <form action="index.php" method="post">
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
          </div>

          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
          </div>

          <button type="submit" name="login">Login</button>
        </form>
      </div>
    </main>
  <?php else: ?>
    <main class="admin-dashboard">
      <header class="admin-header">
        <div>
          <span>Admin Dashboard</span>
          <h1>The Daily Grind</h1>
        </div>
        <a href="index.php?logout=1" class="admin-logout">Logout</a>
      </header>

      <section class="admin-stats">
        <article>
          <span>Total Bookings</span>
          <strong><?php echo $totalBookings; ?></strong>
        </article>
        <article>
          <span>Today</span>
          <strong><?php echo $todayBookings; ?></strong>
        </article>
        <article>
          <span>Upcoming</span>
          <strong><?php echo $upcomingBookings; ?></strong>
        </article>
        <article>
          <span>Total Guests</span>
          <strong><?php echo $totalGuests; ?></strong>
        </article>
      </section>

      <section class="admin-panel">
        <div class="admin-panel-header">
          <div>
            <span>Reservations</span>
            <h2>Table Bookings</h2>
          </div>
        </div>

        <?php if (empty($bookings)): ?>
          <p class="empty-bookings">No table bookings yet.</p>
        <?php else: ?>
          <div class="admin-table-wrap">
            <table class="admin-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Table</th>
                  <th>Guests</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Booked At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($bookings as $booking): ?>
                  <tr>
                    <td><?php echo e($booking['id']); ?></td>
                    <td><?php echo e($booking['name']); ?></td>
                    <td><?php echo e($booking['phone']); ?></td>
                    <td><?php echo e($booking['tableNumber']); ?></td>
                    <td><?php echo e($booking['people']); ?></td>
                    <td><?php echo e($booking['booking_date']); ?></td>
                    <td><?php echo e(substr($booking['booking_time'], 0, 5)); ?></td>
                    <td><?php echo e($booking['created_at']); ?></td>
                    <td>
                      <form action="index.php" method="post" class="delete-form">
                        <input type="hidden" name="booking_id" value="<?php echo e($booking['id']); ?>">
                        <button type="submit" name="delete_booking">Delete</button>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; ?>
      </section>
    </main>
  <?php endif; ?>
</body>

</html>
