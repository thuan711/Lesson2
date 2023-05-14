<?php
    $per_page = 10;

    // trang hiện tại
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    
    // tính số sản phẩm và số trang
    $sql = "SELECT COUNT(*) as total FROM category";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $total_items = $row['total'];
    $total_pages = ceil($total_items / $per_page);
    
    // lấy dữ liệu sản phẩm
    $start = ($current_page - 1) * $per_page;
    $sql = "SELECT * FROM category LIMIT $start, $per_page";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
    <div class="container-fluid">
    <div class="input-group mb-3">
        <input type="text" class="form-control text-center" placeholder="🔍 Search" aria-describedby="basic-addon1">
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
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected>Choose...</option>
                        <?php foreach($data as $key=>$value){?>
                        <option value="1"><?php echo $value['name'];?></option>
                        <?php } ?>
                    </select>
                    <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
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
                            <td style="color:#495057" id="myInput"><?php echo $value['name'];?></td>
                            <td>
                                <a class="p-2" href="<?php echo base_url; ?>editcate/<?php echo $value['id']?>"><i class="fas fa-edit"></i></a>
                                <a href="#" class="copy-btn" data-text="<?php echo $value['name'];?>"><i class="fas fa-copy"></i></a>
                                <a class="p-2" href="<?php echo base_url; ?>delcate/<?php echo $value['id']?>"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>   
            </table>
        </div>  
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php if ($total_pages > 1) { ?>
                    <li class="page-item <?php if ($current_page == 1) echo 'disabled' ?>">
                        <a class="page-link" href="<?php echo $_SERVER['PHP_SELF'] . '?page=' . ($current_page - 1); ?>">Previous</a>
                    </li>
                    <?php for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $current_page) {
                            echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
                        } else {
                            echo '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '">' . $i . '</a></li>';
                        }
                    } ?>
                    <li class="page-item <?php if ($current_page == $total_pages) echo 'disabled' ?>">
                        <a class="page-link" href="<?php echo $_SERVER['PHP_SELF'] . '?page=' . ($current_page + 1); ?>">Next</a>
                    </li>
                <?php } ?>
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
</script>
    