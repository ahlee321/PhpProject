
<div id = "activities" class = "tab-pane fade">
    <img src = "images/calendar.png" class = "pull-left" height = "100" width = "100"/>
    <h2 class = "text-success pull-left">Activities</h2>
    <br style = "clear:both;"/>
    <hr style = "border-top:1px solid #000;"/>
    <h3 class = "text-primary"><?php echo date("M Y", strtotime("+8 HOURS")) ?></h3>
    <br />

    <div style="max-width: 900px; margin: 0 auto;">
        <?php
        $act_query = $conn->query("SELECT * FROM `activity`") or die(mysqli_error());
        while ($act_fetch = $act_query->fetch_array()) {
            ?>
            <div style="border-style:outset; border-radius: 10px; padding:20px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://cdn.vox-cdn.com/thumbor/h-qkmneNK7Ed2YZRFhsSuh5ePjg=/0x0:1100x825/1200x800/filters:focal(462x325:638x501)/cdn.vox-cdn.com/uploads/chorus_image/image/58194473/0011.1367461678.0.jpg" class="img-fluid rounded-start" alt="..." style="width:100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $act_fetch['title'] ?></h3>
                            <h4 class="card-subtitle mb-2 text-muted"><?php echo $act_fetch['companyname'] ?></h4>
                            <p class="card-text"><br><?php echo $act_fetch['description'] ?></p><br>
                            <p class="card-text">Start Date: <small class="text-muted"><?php echo "<label class = 'text-info'>" . date("M d, Y", strtotime($act_fetch['start'])) . "</label>" ?></small></p>
                            <p class="card-text">End Date  : <small class="text-muted"><?php echo "<label class = 'text-info'>" . date("M d, Y", strtotime($act_fetch['end'])) . "</label>" ?></small></p>
                            <a href = "student_login.php"?activity_id=<?php echo $act_fetch['activity_id'] ?>" class = "btn btn-primary"><span class=  "glyphicon glyphicon-edit"></span> Apply</a>
                        </div>
                    </div>
                </div>

            </div>
            <br>

            <?php
        }
        ?>
    </div>

</div>