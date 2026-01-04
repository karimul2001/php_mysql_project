<?php
include_once("includes/db_config.php");
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}
?>

<?php include_once("includes/header.php"); ?>
<?php include_once("includes/leftbar.php"); ?>

<div class="content-wrapper">

  <div class="content-header sty-one">
    <h1 class="text-center">Employee & Payroll Information</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Tables</li>
      <li><i class="fa fa-angle-right"></i> Employee Payroll</li>
    </ol>
  </div>

  <div class="content">
    <div class="card">
      <div class="card-body">

        <h4 class="text-dark">Payroll Data Record</h4>

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Employee Name</th>
                <th>Email</th>
                <th>Attended Days</th>
                <th>Basic Salary</th>
                <th>Net Salary</th>
                <th>Generated At</th>
                <th>Payment</th>
              </tr>
            </thead>

            <?php
            $payrollSQL = 
                "SELECT 
                    e.employee_id,
                    e.first_name,
                    e.last_name,
                    e.email,
                    e.salary,
                    COUNT(a.attendance_id) AS attended_days,
                    ((e.salary / 26) * COUNT(a.attendance_id)) AS net_salary
                FROM attendance a
                INNER JOIN employees e ON a.employee_id = e.employee_id
                WHERE a.date BETWEEN '2025-12-01' AND '2025-12-31'
                  AND a.check_in <= '08:00:00'
                  AND a.check_out >= '05:00:00'
                GROUP BY e.employee_id"
            ;

            $payrollData = $conn->query($payrollSQL);
            ?>

            <tbody>
              <?php if ($payrollData && $payrollData->num_rows > 0) { ?>
                <?php while ($row = $payrollData->fetch_assoc()) { ?>
                  <tr>
                    <td><?= $row['first_name'] . ' ' . $row['last_name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['attended_days']; ?></td>
                    <td><?= number_format($row['salary'], 2); ?></td>
                    <td><strong><?= number_format($row['net_salary'], 2); ?></strong></td>
                    <td><?= date('d M Y'); ?></td>
                    <td class="btn btn-outline-success">CONFIRM</td>
                  </tr>
                <?php } ?>
              <?php } else { ?>
                <tr>
                  <td colspan="6" class="text-center">No Payroll Found</td>
                </tr>
              <?php } ?>
            </tbody>

          </table>
        </div>

        <hr>
        <a href="payroll.php" class="btn btn-outline-success">Generate Payroll</a>

      </div>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php"); ?>
