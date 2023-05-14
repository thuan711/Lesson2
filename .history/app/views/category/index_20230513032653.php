
    <div class="container-fluid">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
        </form>                                                                                                                             
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    <!--  -->
    </div>
        <form method="post" style="width:1000px; height:60px; position:relative;">
            <input type="text" name="txtname" style="float:left; width:40%; margin-top:30px;"> 
            <button style="width:200px;position:absolute;">Thêm</button>
        </form>
        <div class="table-responsive-sm">
            <table class="table table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category name</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <?php foreach($data as $key=>$value){?> 
                    <tbody>
                        <tr>
                            <td style="color:#495057"><?php echo $value['id'];?></td>
                            <td style="color:#495057"><?php echo $value['name'];?></td>
                            <td>
                                <a class="p-2" href="<?php echo base_url; ?>editcate/<?php echo $value['id']?>"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url; ?>delcate/<?php echo $value['id']?>"><i class="fas fa-copy"></i></a>
                                <a class="p-2" href="<?php echo base_url; ?>delcate/<?php echo $value['id']?>"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>';
                <?php } ?>   
            </table>
        </div>  
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    