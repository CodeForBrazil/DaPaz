

<!-- Modals -->
<?php $this->load->view('modals/new_activity'); ?>

<?php $this->load->view('modals/login'); ?>

<?php $this->load->view('modals/register'); ?>

<?php $this->load->view('modals/password'); ?>

<?php $this->load->view('modals/confirm'); ?>

<?php $this->load->view('modals/apply'); ?>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/global.js'); ?>" type="text/javascript"></script>
	
<?php 
	if (isset($extra_js)) {
		foreach ($extra_js as $js) {
			echo "<script src=\"$js\" type=\"text/javascript\"></script>";
		}
	}
/*	if (isset($extra_js_scripts)) {
		echo "$(document).ready(function () {";
		foreach ($extra_js_scripts as $script) echo $script;
		echo "});";
	}*/
?>    

<?php if (isset($open_modal)) : ?>
    <script type="text/javascript">
    $(window).load(function(){
        $('#<?php echo $open_modal; ?>Modal').modal('show');
    });
    </script>
<?php endif; ?>

<?php if (defined('ENVIRONMENT') && in_array(ENVIRONMENT,array('development'))) $this->output->enable_profiler(TRUE); ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-65707639-1', 'auto');
        ga('send', 'pageview');
    </script>

</body>
</html>
