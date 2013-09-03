<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1><br />
<h3>Project Management Software Perfected Through 10 Years of Real-World Use</h3>

<p>For 10 years, companies like Subway and Wells Fargo have relied on WorkZone web-based 
project management software to manage their projects. With WorkZone, you’ll dramatically 
reduce effort spent managing each project, and team members will always know what tasks 
they should be working on. More robust than simpler project management tools, like Basecamp, 
and less complicated than high-end tools, like Microsoft Project, WorkZone is the “just right” 
solution for most teams.</p>

<?php if(!Yii::app()->user->isGuest):?>
<p>
    You last logged in on <?php echo Yii::app()->user->lastLogin; ?>
</p>
<?php endif; ?>

