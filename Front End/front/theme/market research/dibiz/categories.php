<?php $this->load->view('includes/header');?>

    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle ">Cateories</h2>
                <center>
                  <nav aria-label="breadcrumb" >
                      <ol class="breadcrumb" >
                        <li class="breadcrumb-item" style="color: #fff !important;" ><a href="<?=base_url();?>">Home</a></li>
                        <li class="breadcrumb-item active"  style="color: #fff !important;" aria-current="page" >Categories</li>
                      </ol>
                    </nav>  
                 </center>
            </div>
        </div>
    </div>
    </section>

<style type="text/css">
    .category h3 {
    font-size: 16px;
    line-height: 32px;
    font-weight: 400px;
   margin: 20px 0;
   text-align: center;

}

img {
    vertical-align: middle;margin: 10px 5px;
    display: block;
    margin: 0 auto;

   
}

img:hover{
transform: scale(1.2);
}

.category a{

   text-transform: uppercase;
   text-decoration: none;
   color: #232529;
}
</style>

    <section id="content">
        <div class="container">
         <div class="row">
             <div class="col-md-4">
                 <div class="category">
                  <a href="<?base_url();?>categories/agriculture"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Agriculture" class="img-fluid" /><h3>Agriculture</h3></a>   
                 </div>
              </div>      
             <div class="col-md-4">
                 <div class="category">
                  <a href="<?base_url();?>categories/agriculture"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Automotive" class="img-fluid" /><h3>Automotive</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Chemicals & Materials" class="img-fluid" /><h3>Chemicals & Materials</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Consumer Goods" class="img-fluid" /><h3>Consumer Goods</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Pharma & Healthcare" class="img-fluid" /><h3>Pharma & Healthcare</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Service Industries" class="img-fluid" /><h3>Service Industries</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Power & Energy" class="img-fluid" /><h3>Power & Energy</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="" class="img-fluid" /><h3>Information & Technology</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Semiconductor Electronics" class="img-fluid" /><h3>Semiconductor Electronics</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Manufacturing Construction" class="img-fluid" /><h3>Manufacturing Construction</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Medical Devices" class="img-fluid" /><h3>Medical Devices</h3></a>   
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="category">
                  <a href="#"><img src="https://www.megaresearchworks.com/img/it1.jpg" alt="Technology & Medias" class="img-fluid" /><h3>Technology & Media</h3></a>   
                 </div>
             </div>                                                                                           

             </div>
         </div>   
                        
        </div>
    </section>
<?php $this->load->view('includes/footer');?>
