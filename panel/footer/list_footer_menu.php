<?php
include_once '../functions/footer_func.php';
$count = count(show_footer_menu());
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading mb-2">
                <a class="btn btn-outline-dark ml-2" href="dashboard.php?page=add_footer_menu">افزودن عنوان</a>
                <span>تعداد کل : <?php echo $count ?>     </span>
            </header>
            <table class="table table-striped table-advance table-hover">

                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>لینک منو</th>
                    <th>فعال/غیرفعال</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php $list = show_footer_menu();
                //                var_dump($list);
                //                die();
                foreach ($list

                         as $item):
                    ?>
                    <tr>
                        <td><a class="title" href="<?php echo $item->url ?>"> <?php echo $item->title ?> </a></td>
                        <td> <?php echo $item->url ?> </td>

                        <td><?php if ($item->status == "on") {
                                echo "<i class='fa fa-check-square-o fa-2x text-success'></i>";
                            } else {
                                echo "<i class='fa fa-close fa-2x text-danger'></i>";
                            } ?></td>
                        <td><a href="dashboard.php?page=update_footer_menu&id=<?php echo $item->id ?>"
                               class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td><a href="dashboard.php?page=delete_footer_menu&id=<?php echo $item->id ?>"
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
