<?php
use yii\helpers\html;
/** @var yii\web\View $this */

$this->title = 'eSkool';
?>
<?php echo $this->render('common/headers') ?>
<div class="site-index">
    <div class="body-content">
        <!--div class="row">

            <table class="table table-hover">
                <thead>
                <tr class="table-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Course Code</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course Description</th>
                    <th scope="col">Academic Level</th>
                    <th scope="col">Course Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php //if (count($courses) > 0):?>
                <?php //foreach ($courses as $course): ?>
                <tr class="table-info">
                    <th scope="row"><?php //echo $course->course_id; ?></th>
                    <td><?php //echo $course->course_code; ?></td>
                    <td><?php// echo $course->course_name; ?></td>
                    <td><?php //echo $course->course_description; ?></td>
                    <td><?php //echo $course->education_level; ?></td>
                    <td><?php //echo $course->status == 1 ? 'Active' : 'Inactive' ?></td>
                    <td>
                        <span><//?= Html::a('View') ?></span>
                        <span><//?= Html::a('Edit') ?></span>
                        <span><//?= Html::a('Delete') ?></span>
                    </td>
                </tr>
                <?php //endforeach; ?>
                <?php //else: ?>
                    <tr>
                        <td>No Records Found</td>
                    </tr>
                <?php //endif; ?>
                </tbody>
            </table>


            <div class="col-lg-4">
                <h2>Programs</h2>



                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div-->

    </div>
</div>

