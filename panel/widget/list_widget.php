<?php
include_once '../functions/widget_func.php';
$count = count(get_widgets());
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading mb-2">
                <a class="btn btn-outline-dark ml-2" href="dashboard.php?page=add_widget">افزودن عنوان</a>
                <span>تعداد کل : <?php echo $count ?>     </span>
            </header>
            <table class="table table-striped table-advance table-hover">

                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>آیکون</th>
                    <th> کد آیکون</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php $list = get_widgets();
                foreach ($list

                         as $item):
                    ?>
                    <tr>
                        <td class="font-weight-bold"> <?php echo $item->title ?> </td>
                        <td> <?php echo $item->icon ?></td>
                        <td><span class="fa-2x <?php echo $item->icon ?>"></span></td>
                        <td><a href="dashboard.php?page=update_widget&id=<?php echo $item->id ?>"
                               class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td><a href="dashboard.php?page=delete_widget&id=<?php echo $item->id ?>"
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
