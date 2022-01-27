<?php $this->load->view('includes/header');?>
<?php   $url = $this->myhelp->GetReportURL($report->reportTitle,$report->id,$report->category);?>
    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle"><?php echo $report->reportTitle;?></h2>
                              <center>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="#" style="color: white!important;font-weight: bold;">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page" style="color: white!important;font-weight: bold;">Ask For Discount</li>
                        </ol>
                    </nav>
                    </center>  
            </div>
        </div>
    </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row"> 
                <div class="col-md-8">
                    <h2 style="text-transform: capitalize;">Ask for Discount</h2>
                        <form name="form1" action="<?=base_url()?>SubmitAskForDisc" method="post"> 
                            <input type="hidden" name="report_title" value="<?php echo $report->reportTitle?>">
                            <input type="hidden" name="publisher" value="<?php echo $this->myhelp->GetPublisher($report->publisher)?>">
                            <input type="hidden" name="id" value="<?php echo $report->id?>">
                            <div class="col-md-12">
                                <label for="name">Name</label>
                                <input type="text" id="fname" name="name" placeholder=" Your Name.." required>
                            </div>
                            <div class="col-md-12">
                            <label for="email">Business Email</label>
                            <input type="email" id="email" name="email" placeholder="Your Business Email.." required>
                            </div>
                             <div class="col-md-6">
                                <label for="country">Country</label>
                                     <?php include('country_code.php'); ?>
                              </div>
                              <div class="col-md-6">
                                  <label for="telephone">Contact</label>
                                  <input type="number" id="telephone" name="telephone" placeholder="Contact Number"required>
                               </div>
                            <div class="col-md-12">
                                <label for="company">Company</label>
                                <input type="text" id="company" name="company" placeholder=" Company Name.." required>
                            </div>
                            <div class="col-md-12">
                                <label for="requirements">Any Other Requirements:</label>
                                <textarea id="requirements" name="requirements" placeholder="Mention your Additional requirments.." style="height:100px"></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Submit" name="submit">
                            </div>
                        </form>                    

                </div>
                <div class="col-md-4">
                    <h2 style="text-transform: capitalize;">Report Details</h2>
                    <table class="table table-bordered" id="rpttable">
                        <tr>
                          <th scope="col">Report ID</th>
                          <td><strong>MRW-30818</strong></td>
                        </tr>
                        <tr>
                          <th scope="col">Category</th>
                          <td>Medical Devices</td>
                        </tr>
                        <tr>
                          <th scope="col">Published Date</th>
                          <td>Nov 2019</td>
                        </tr>
                        <tr>
                          <th scope="col">Pages</th>
                          <td>123</td>
                        </tr> 
                        <tr>
                          <th scope="col">Format</th>
                          <td>PDF</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('includes/footer');?>
