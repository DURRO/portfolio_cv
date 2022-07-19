<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Portfolio</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />
</head>
<body>

<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
            <?php include 'php/database.php' ?>
            <?php
            $objectDB = new database();
            $conn = $objectDB->getConnection();
            $sql = "SELECT * FROM user";
            $result1 = $conn->query($sql);
            if ($result1->num_rows > 0){
            while ($row2 = $result1->fetch_assoc()){

            ?>
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?php echo $row2['firstname']." ". $row2['lastname'] ?></h1>
					<h2><?php 'Web Developer ' ?></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3><a href="mailto:duri00555@gmail.com"><?php echo $row2['email']?></a></h3>
						<h3>+383 (0) <?php echo $row2['phonenumber'] ?></h3>
                        <h3><?php echo $row2['address'] ?></h3>
					</div><!--// .contact-info -->
				</div>
			</div>
            <!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>About</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								<?php echo $row2['about'] ?>
							</p>

						</div>
					</div><!--// .yui-gf -->



					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
                        <?php
                        $sql = "SELECT * FROM skills";
                        $result1 = $conn->query($sql);
                        if ($result1->num_rows > 0){
                            ?>
						<div class="yui-u">
                            <?php
                            while ($row1 = $result1->fetch_assoc()){

                            ?>
							<ul class="talent">
								<li class="last"><?php echo $row1['name']?></li>
							</ul>
                            <?php } }?>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">
                            <?php
                            $sql = "SELECT * FROM experience";
                            $result1 = $conn->query($sql);
                            if ($result1->num_rows > 0){
                            while ($row1 = $result1->fetch_assoc()){

                            ?>
							<div class="job last">
								<h2><?php echo $row1['name'] ?></h2>
								<h3><?php echo $row1['field']?></h3><br>
								<h4><?php echo date('Y-m', strtotime($row1['started']))."--".$row1['ended']?></h4>
								<p><?php echo $row1['body'] ?></p>
							</div>
                            <?php }} ?>
						</div>
					</div>

                    <div class="yui-gf">

                        <div class="yui-u first">
                            <h2>Repository</h2>
                        </div><!--// .yui-u -->

                        <div class="yui-u">
                            <?php
                            $sql = "SELECT * FROM repository";
                            $result1 = $conn->query($sql);
                            if ($result1->num_rows > 0){
                            while ($row1 = $result1->fetch_assoc()){
                            ?>
                            <div class="job last">
                                <h2><a href="<?php echo $row1['web'] ?>"><?php echo $row1['name'] ?></a></h2>
                                <h3><?php echo $row1['field'] ?></h3>
                                <h4><?php echo date('m-Y', strtotime($row1['started'])) ?></h4>
                                <p><?php echo $row1['body'] ?></p>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>

					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
                        <?php
                        $sql = "SELECT * FROM education";
                        $result1 = $conn->query($sql);
                        if ($result1->num_rows > 0){
                        while ($row1 = $result1->fetch_assoc()){

                        ?>
						<div class="yui-u">
							<h2><?php echo $row1['name'] ?>-<strong><?php echo $row1['level'] ?></strong> </h2>
							<h3><?php echo $row1['degree'] ?></h3>
                            <br><h4>Field: <?php echo $row1['field'] ?></h4>
                            <h4><?php echo date('m-Y', strtotime($row1['started']))."-".$row1['ended'] ?></h4>
						</div>
                        <?php } }?>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?php echo $row2['firstname']." ". $row2['lastname'] ?> &mdash; <a href="mailto:duri00555@gmail.com"><?php echo $row2['email'] ?></a> &mdash;+383 (0) - <?php echo $row2['phonenumber'] ?></p>
            <?php }}?>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>

