<?php
require "core.php";
head();

if (isset($_GET['delete-id'])) {
    $id    = (int) $_GET["delete-id"];

    $query = $mysqli->query("DELETE FROM `psec_logs` WHERE id='$id'");
}

if (isset($_GET['delete-all'])) {
    $query = $mysqli->query("TRUNCATE TABLE `psec_logs`");
}
?>   
<div class="content-wrapper">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div class="content-header">
				
				<div class="container-fluid">
				  <div class="row mb-2">
        		    <div class="col-sm-6">
        		      <h1 class="m-0 "><i class="fas fa-align-justify"></i> All Logs</h1>
        		    </div>
        		    <div class="col-sm-6">
        		      <ol class="breadcrumb float-sm-right">
        		        <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home"></i> Admin Panel</a></li>
        		        <li class="breadcrumb-item active">All Logs</li>
        		      </ol>
        		    </div>
        		  </div>
    			</div>
            </div>

				<!--Page content-->
				<!--===================================================-->
				<div class="content">
				<div class="container-fluid">

                <div class="row">
				<div class="col-md-12">
                    
				    <div class="card card-primary card-outline">
						<div class="card-header">
							<h3 class="card-title">All Logs</h3>
							<a href="?delete-all" class="btn btn-flat btn-sm btn-danger float-sm-right" data-toggle="tooltip" data-toggle="tooltip" title="Delete all logs"><i class="fas fa-trash"></i> Delete All</a>
						</div>
						<div class="card-body">
                                    
<table id="dt-basiclogs" class="table table-bordered table-hover table-sm" width="100%">
									<thead class="<?php echo $thead; ?>">
										<tr>
						                  <th>IP Address</th>
										  <th>Type</th>
						                  <th>Date</th>
										  <th>Browser</th>
										  <th>OS</th>
										  <th>Country</th>
										  <th>Actions</th>
										</tr>
									</thead>
									<tbody>
<?php
$sql = $mysqli->query("SELECT id, ip, date, time, browser, browser_code, os, os_code, country, country_code, type FROM `psec_logs` ORDER by id DESC");
while ($row = mysqli_fetch_assoc($sql)) {
    echo '
										<tr>
						                  <td>' . $row['ip'] . '</td>
										  <td>';
    if ($row['type'] == 'SQLi') {
        echo '
						                    <i class="fas fa-code"></i> ' . $row['type'] . '
						                    ';
    } else if ($row['type'] == 'Proxy') {
        echo '
						                    <i class="fas fa-globe"></i> ' . $row['type'] . ' 
						                    ';
    } else if ($row['type'] == 'Spammer') {
        echo '
						                    <i class="fas fa-keyboard"></i> ' . $row['type'] . '
						                    ';
    } else {
        echo '
						                    <i class="fas fa-user-secret"></i> ' . $row['type'] . '
						                    ';
    }
    echo '
										  </td>
						                  <td data-sort="' . strtotime($row['date']) . '">' . $row['date'] . ' at ' . $row['time'] . '</td>
										  <td><img src="assets/img/icons/browser/' . $row['browser_code'] . '.png" /> ' . $row['browser'] . '</td>
										  <td><img src="assets/img/icons/os/' . $row['os_code'] . '.png" /> ' . $row['os'] . '</td>
										  <td><img src="assets/plugins/flags/blank.png" class="flag flag-' . strtolower($row['country_code']) . '" alt="' . $row['country'] . '" /> ' . $row['country'] . '</td>
										  <td>
                                            <a href="log-details.php?id=' . $row['id'] . '" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-tasks"></i> Details</a>
											<a href="?delete-id=' . $row['id'] . '" class="btn btn-flat btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
										  </td>
										</tr>
';
}
?>
									</tbody>
								    </table>

                        </div>
                     </div>
                </div>
                    
				</div>
                    
				</div>
				</div>
				<!--===================================================-->
				<!--End page content-->

			</div>
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->
</div>
<?php
footer();
?>