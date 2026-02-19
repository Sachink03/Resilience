   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add </a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Settings</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.change-price') }}" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                       
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Roi Percentage</label>                                            
                                               <input type="text" placeholder="Percentage" name="percentage" value="{{generalDetail()->roiPercentage}}" class="form-control" required id="">
                                            </div>

                                            <!--<div class="mb-3 col-md-6">-->
                                            <!--    <label class="form-label">Wallet Address</label>                                            -->
                                            <!--   <input type="text" placeholder="Wallet Address" name="walletAddress" value="{{generalDetail()->usdtBep20}}" class="form-control" required id="">-->
                                            <!--</div>-->

                                            
                                           

              
                                           
                                        </div>
     
                                      
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                
     
                </div>
            </div>
        </div>
        <!--**********************************
                 Content body end
             ***********************************-->
     