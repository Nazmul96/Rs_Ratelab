 <?= $this->extend('admin/master'); ?>
 <?= $this->section('content'); ?>

 <div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
 
 
  

        	<h4 class="d-flex">All Companies</h4>
        
        	
        	     <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        		   <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                                            <thead class="bg-info">
                                            <tr>
                                                <th>S.N.</th>
                                                <th>User</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>URL</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
                                            	<?php foreach($company_list as $key=>$companies_list){?>
    												<tr>
    													<td><?php echo $key+1; ?></td>
    													<td>
    														<?php echo $companies_list->user_name;?>
    															
    													</td>
    													<td>
    														<?php echo $companies_list->company_name;?>
    													</td>
    													<td>
    														<?php echo $companies_list->category_name;?>
    													</td>
    													<td>
    														<?php echo $companies_list->url;?>
    													</td>
    													<td><?php echo $companies_list->email_address;?></td>
    													<td>
    														<?php if( $companies_list->status == 0){
    															echo '<span class="badge bg-warning">Pending</span>';
    														} 
    														else if($companies_list->status == 1)
    														{

    															echo '<span class="badge bg-success">Approved</span>';
    														}
    														else
    														{
    															echo '<span class="badge bg-danger">Rejected</span>';

    														}
    														?>	
    															
    													</td>
    													<td>
						    							 <a href="<?= base_url() ?>/admin/companies/details/<?php echo $companies_list->id;?>" class="company_hover">
									                        <i class="mdi mdi-desktop-mac mdi-24px"></i>
									                         </a>
    													</td>
    												</tr>
    											<?php } ?>		
                                      				
                                           </tbody>
                        </table>

                     </div>
                   </div>
                  </div>
                </div>

        </div> <!-- container-fluid -->

    </div> <!-- content -->
</div>

<script type="text/javascript">



</script>

 <?= $this->endSection() ?>

