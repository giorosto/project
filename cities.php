<?php 
include_once "includes/header.php";
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
?>
<section id="gomi">
    <div class="container">
      <div>
        <form method="POST" enctype="multipart/form-data" action="./helper/cities.php">
            <div>    
                <input name="name" placeholder="name" type="text"> 
            </div>
            <div>    
                <input name="title" placeholder="title" type="text"> 
            </div>
            <div> 
                <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea>   
            </div>
            <div>    
                <input type="file" name="image"> 
            </div>
            <div>    
                <button type="submit">create</button> 
            </div>
        </form>
      </div>
    </div>
  </section>
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent tour<span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <?php
          $cities_sql = "SELECT * FROM `cities`";
          $cities_result=$conn->query($cities_sql);
        ?>
        <?php
          if($cities_result->num_rows>0){
            while($cities=$cities_result->fetch_assoc()){
        ?>
        <div class="project-item" style="position:relative;">
            <form action="./helper/delete_cities.php" method="POST" style="z-index:10">
                <input type="hidden" name="city_id" value="<?php echo $cities['id'] ?>">
                <button type="submit" style="z-index:10;background:none;border:none;color:white;font-size:18px;">
                    <div class="close-button">
                        x    
                    </div>
                </button>
            </form>
          <div class="project-info" style="width:100%;">
            <h1>
              <?php echo $cities['name'] ?>
            </h1>
            <h2><?php echo $cities['title'] ?></h2>
            <p>
              <?php echo $cities['description'] ?>
            </p>
          </div>
          <div class="project-img">
            <img src="./uploads/<?php echo $cities['img_url'] ?>" alt="img">
          </div>
        </div>
        <?php 
            }
          }
        ?>
      </div>
    </div>
  </section>
<?php 
}else{
    ?>
    <section id="gomi">
        <div class="container">
        <div style="color:white;">
            მარტო ადმინს შეუძლია შემოსვლა.
        </div>
        </div>
    </section>
    <?php
}
include_once "includes/footer.php";
?>
