
  <!-- Header -->
  <?php 
  include_once "includes/header.php";
  ?>
  <!-- End Header -->


  <!-- Gomi Section  -->
  <section id="gomi">
    <div class="gomismta container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Welcome to georgia <span></span></h1>
        <h1>Lets start your journey <span></span></h1>
        <a href="#projects" type="button" class="cta">Begin traveling</a>
      </div>
    </div>
  </section>
  <!-- gomi Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>Our company offers you different type of vehicles wich can be used for u to travel across the country plus exclusive offer only with us u can travel using our supercar</p>
      </div>
      <div class="service-custom" >
        <?php
          $services_sql = "SELECT * FROM `services`";
          $services_result=$conn->query($services_sql);
        ?>
        <?php
          if($services_result->num_rows>0){
            while($services=$services_result->fetch_assoc()){
        ?>
        <div class="service-item ">
          <div class="icon">
            <img src="./uploads/<?php echo $services['image_url'] ?>" />
          </div>
          <h2>
            <?php echo $services['title'] ?>
          </h2>
          <p>
            <?php echo $services['description'] ?>
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
  <!-- End Service Section -->

  <!--Tour Projects Section -->
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
        <div class="project-item">
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
  <!-- Tour Projects end Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="img/travel.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>Us</span></h1>
        <h2>Tourism Agency</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque
          repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt
          exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni!
          Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt
          reprehenderit libero enim!</p>
        <a href="#" class="cta">Download Prices</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <?php 
    $sql="SELECT * FROM `contacts` ";  
    $result=$conn->query($sql);
  ?>
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
      <?php
        if($result->num_rows>0){
          while($row=$result->fetch_assoc()){
      ?>
      
        <div class="contact-item">
          <div class="icon"><img src="<?php echo $row["img_url"]?>"/></div>
          <div class="contact-info">
            <h1><?php echo $row["title"]?></h1>
            <h2><?php echo $row["description"]?><h2>
          </div>
        </div>
      
      <?php 
          }
        }
      ?>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
  <script src="./app.js"></script>
  <!-- Footer -->
  <?php 
  include_once "includes/footer.php";
  ?>
  <!-- End Footer -->
  
