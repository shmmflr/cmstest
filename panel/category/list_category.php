<?php
include_once '../functions/category_func.php';
$count = count(all_category());
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading mb-2">
                <a class="btn btn-outline-dark ml-2" href="dashboard.php?page=add_category">افزودن عنوان</a>
                <span>تعداد کل : <?php echo $count ?>     </span>
            </header>
            <table class="table table-striped table-advance table-hover">

                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>مرتب سازی</th>
                    <th>فعال/غیرفعال</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php $list = main_category();
                foreach ($list

                         as $item):
                    ?>
                    <tr>
                        <td><a class="title" href="#"> <?php echo $item->title ?> </a></td>
                        <td><?php echo $item->sort ?></td>
                        <td><?php if ($item->status == "on") {
                                echo "<i class='fa fa-check-square-o fa-2x text-success'></i>";
                            } else {
                                echo "<i class='fa fa-close fa-2x text-danger'></i>";
                            } ?></td>
                        <td><a href="dashboard.php?page=update_cat&id=<?php echo $item->id ?>"
                               class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td><a href="dashboard.php?page=delete_cat&id=<?php echo $item->id ?>"
                               class=" btn btn-danger btn-xs ">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    $subcategory = sub_category($item->id);
                    foreach ($subcategory as $subcat):
                        ?>
                        <tr>
                            <td>
                                <i class="fa fa-arrow-left"></i>
                                <a class="title font-weight-lighter text-dark"
                                   href="#"> <?php echo $subcat->title ?> </a></td>
                            <td><?php echo $subcat->sort ?></td>
                            <td><?php if ($subcat->status == "on") {
                                    echo "<i class='fa fa-check-square-o fa-2x text-success'></i>";
                                } else {
                                    echo "<i class='fa fa-window-close fa-2x text-danger'></i>";
                                } ?></td>
                            <td><a href="dashboard.php?page=update_cat&id=<?php echo $subcat->id ?>" class=" btn
                                   btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                            <td><a href="dashboard.php?page=delete_cat&id=<?php echo $subcat->id ?>"
                                   class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                        $subcats = sub_subcategory_cat($subcat->id);
                        foreach ($subcats as $val):
                            ?>
                            <tr>
                                <td>
                                    <i class="fa fa-dollar"></i>
                                    <a class="title font-weight-lighter text-dark"
                                       href="#"> <?php echo $val->title ?> </a></td>
                                <td><?php echo $val->sort ?></td>
                                <td><?php if ($val->status == "on") {
                                        echo "<i class='fa fa-check-square-o fa-2x text-success'></i>";
                                    } else {
                                        echo "<i class='fa fa-window-close fa-2x text-danger'></i>";
                                    } ?></td>
                                <td><a href="dashboard.php?page=update_cat&id=<?php echo $val->id ?>" class=" btn
                                   btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td><a href="dashboard.php?page=delete_cat&id=<?php echo $val->id ?>"
                                       class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                </tbody>

            </table>
        </section>
    </div>
</div>
