<?php
include_once '../functions/post_func.php';
$list = all_post();
$count = count($list);
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading mb-2">
                <a class="btn btn-outline-dark ml-2" href="dashboard.php?page=add_post">افزودن عنوان</a>
                <span>تعداد کل : <?php echo $count ?>     </span>
            </header>
            <table class="table table-striped table-advance table-hover">

                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>متن</th>
                    <th>دسته بندی</th>
                    <th>نویسنده</th>
                    <th>عکس</th>
                    <th>تاریخ</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($list as $item):
                    ?>
                    <tr>
                        <td><a class="title" href="#"> <?php echo $item->title ?> </a></td>
                        <td><p class="text_content"><?php echo $item->text ?></p></td>
                        <td>
                            <?php
                            $cat_id = post_cat($item->cat_id);
                            foreach ($cat_id as $cat) {
                                echo $cat->title . ',';
                            }
                            ?>

                        </td>
                        <td><?php echo $item->author ?></td>
                        <td><img src="<?php echo $item->img ?>" width="50px" height="50px"/></td>
                        <td><?php echo $item->w_date ?></td>

                        <td><a href="dashboard.php?page=update_post&id=<?php echo $item->id ?>"
                               class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td><a href="dashboard.php?page=delete_post&id=<?php echo $item->id ?>"
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

