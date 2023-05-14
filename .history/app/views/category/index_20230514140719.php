
<div class="container-fluid" ng-app="myapp" ng-controller="myctrl">
    <div class="input-group mb-3">
        <input type="text" id="searchInput" onkeyup="searchTable()" class="form-control text-center" placeholder="🔍 Search" aria-describedby="basic-addon1">
    </div>

    <!--  -->
    <button type="button" class="btn btn-primary float-right mx-2 mb-2" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade p-2" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post">
                <div class="form-group">
                    <label>Category name</label>
                    <input type="text" class="form-control" name="txtname">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <label>Parent Category</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="parentCategorySelect" name="parentid">
                            <option selected>Choose...</option>
                            <?php foreach($data as $key=>$value){?>
                            <option><?php echo $value['id'];?>. <?php echo $value['name'];?></option>
                            <?php } ?>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text" for="parentCategorySelect">Options</label>
                        </div>
                    </div>  
                    <button class="btn btn-primary mt-3">Submit</button>
                </div>
            </form>                                                                                                                             
        </div>
    </div>
    </div>

    <!--  -->
    </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered text-center" id="dataTable">
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
                        <td style="color:#495057" id="myInput"><?php echo $value['name'];?></td>
                        <td>
                            <a class="p-2" href="<?php echo base_url; ?>editcate/<?php echo $value['id']?>"><i class="fas fa-edit"></i></a>
                            <a href="#" class="copy-btn" data-text="<?php echo $value['name'];?>"><i class="fas fa-copy"></i></a>
                            <a class="p-2" href="<?php echo base_url; ?>delcate/<?php echo $value['id']?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php
                        $subcategories = $this->categories::where('parentid', '=', $value['id'])->get();
                        if(count($subcategories) > 0) {
                            foreach($subcategories as $subcategory) {?>
                                <tr>
                                    <td style="color:#495057"></td>
                                    <td style="color:#495057">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-><?php echo $subcategory['name'];?></td>
                                    <td>
                                        <a class="p-2" href="<?php echo base_url; ?>editcate/<?php echo $subcategory['id']?>"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="copy-btn" data-text="<?php echo $subcategory['name'];?>"><i class="fas fa-copy"></i></a>
                                        <a class="p-2" href="<?php echo base_url; ?>delcate/<?php echo $subcategory['id']?>"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        }
                    ?>
                    </tbody>
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
<script>
    $(document).ready(function() {
        $('.copy-btn').on('click', function() {
            var text = $(this).data('text');
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(text).select();
            document.execCommand("copy");
            $temp.remove();
            alert('Copy: ' + text);
        });
    });
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
            txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    var app = angular.module("myapp", ["ngRoute"]);
    app.controller("myctrl", function($scope, $http) {
        $scope.start = 0;
        $scope.tiep = function(){
            $scope.start+=5;
        }
    });
</script>
    