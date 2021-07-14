<?php
include_once '../functions/user_func.php';
$count = count(user_list());
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading mb-2">
                <a class="btn btn-outline-dark ml-2" href="dashboard.php?page=add_user">افزودن عنوان</a>
                <span>تعداد کل : <?php echo $count ?>     </span>
            </header>
            <table class="table table-striped table-advance table-hover">

                <thead>
                <tr>
                    <th>نام کاربری</th>
                    <th>ایمیل</th>
                    <th> سطح دسترسی</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php $users = user_list();

                foreach ($users

                         as $user):

                    ?>
                    <tr>
                        <td class="font-weight-bold"> <?php echo $user->username ?> </td>
                        <td> <?php echo $user->email ?></td>
                        <td> <?php if ($user->roles == 'admin') {
                                echo 'مدیر';
                            } elseif ($user->roles == 'author') {
                                echo 'نویسنده';
                            } else {
                                echo 'کاربر عادی';
                            }
                            ?></td>
                        <td><a href="dashboard.php?page=update_user&id=<?php echo $user->id ?>"
                               class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td><a href="dashboard.php?page=delete_user&id=<?php echo $user->id ?>"
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
