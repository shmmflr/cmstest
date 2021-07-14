<?php
include_once '../functions/slider_func.php';
include_once '../functions/post_func.php';
$list = all_slider();
$count = count($list);
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading mb-2">
                <a class="btn btn-outline-dark ml-2" href="dashboard.php?page=add_slider">افزودن اسلایدر</a>
                <span>تعداد کل : <?php echo $count ?> </span>
            </header>
            <table class="table table-striped table-advance table-hover">

                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>url</th>
                    <th>عکس</th>
                    <th>وضعیت</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list as $item):
                    ?>
                    <tr>
                        <td><a class="title" href="#"> <?php echo $item->title; ?> </a></td>
                        <td><p class="text_content"><?php echo $item->url ?></p></td>
                        <td><img src="<?php echo $item->img ?>" width="100px" height="50px"/></td>
                        <td><?php if ($item->status == "on") {
                                echo "<i class='fa fa-check-square-o fa-2x text-success'></i>";
                            } else {
                                echo "<i class='fa fa-window-close fa-2x text-danger'></i>";
                            } ?></td>

                        <td><a href="dashboard.php?page=update_slider&id=<?php echo $item->id ?>"
                               class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td><a href="dashboard.php?page=delete_slider&id=<?php echo $item->id ?>"
                               class=" btn btn-danger btn-xs ">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>
                </tbody>

            </table>
        </section>
    </div>
</div>

