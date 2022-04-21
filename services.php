<?php 
include_once "includes/header.php";
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
?>
<section id="gomi">
    <div class="container">
      <div>
        <form method="POST" enctype="multipart/form-data" action="./helper/services.php">
            <div>    
                <input name="name" placeholder="name" type="text"> 
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
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>
            რედაქტირება წაშლა
        </p>
      </div>
      <div class="service-custom" style="width:400px;">
        <?php
          $services_sql = "SELECT * FROM `services`";
          $services_result=$conn->query($services_sql);
        ?>
        <?php
          if($services_result->num_rows>0){
            while($services=$services_result->fetch_assoc()){
        ?>
        <div class="service-item" style="position:relative;">
            <form action="./helper/delete_service.php" method="POST">
                <input type="hidden" name="service_id" value="<?php echo $services['id'] ?>">
                <button type="submit" style="background:none;border:none;color:white;font-size:18px;">
                    <div class="close-button">
                        x    
                    </div>
                </button>
            </form>
          <div class="icon">
            <img src="./uploads/<?php echo $services['image_url'] ?>" />
          </div>
          <h2>
            <?php echo $services['title'] ?>
          </h2>
          <p>
            <?php echo $services['title'] ?>
          </p>
        </div>
        <?php 
            }
          }
        ?>
        <!-- <div class="service-item">
          <div class="icon"><img src="img/helo.jpg" /></div>
          <h2>Helicopter  50$</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
        </div> -->
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
