
    <script src="{{ asset('docs/_vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('docs/_vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('docs/_vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('docs/_assets/js/custom.js') }}"></script>

    <script src="{{ asset('Bootstrap4C/js/chosen.jquery.js') }}"></script>
    <script src="{{ asset('Bootstrap4C/js/dropzone.js') }}"></script>
	
	<script>
		$('div.alert').not('.alert-important').delay(2500).fadeOut(1150);
	</script>
	
	@yield('js')
<!-- 
<script type="text/javascript">
  $('.form-control-chosen').chosen({
    allow_single_deselect: true
  });
  $('.form-control-chosen-required').chosen({
    allow_single_deselect: false
  });
  $('.form-control-chosen-optgroup').chosen();
  // Clickable optgroup add class
  $(function() {
    $('[title="clickable_optgroup"]').addClass('chosen-container-optgroup-clickable');
  });
  // Clickable optgroup
  $(document).on('click', '[title="clickable_optgroup"] .group-result', function() {
    var unselected = $(this).nextUntil('.group-result').not('.result-selected');
    if(unselected.length) {
      unselected.trigger('mouseup');
    } else {
      $(this).nextUntil('.group-result').each(function() {
        $('a.search-choice-close[data-option-array-index="' + $(this).data('option-array-index') + '"]').trigger('click');
      });
    }
  });
</script>
<script type="text/javascript">
  Dropzone.autoDiscover = false;
  jQuery(document).ready(function() {
    $("#dropzone").dropzone({
      url: "/file/post",
      dictDefaultMessage: "Drop files here or<br>click to upload..."
    });
  });
</script>
<script type="text/javascript">
  $('.form-control-tag').tagEditor({
      initialTags: ['Hello', 'World'],
      delimiter: ', ',
      forceLowercase: false,
      animateDelete: 0,
      placeholder: 'Enter tag...'
  });
  // Removing all tags
  $(document).on('click', '.btn-remove-tags', function() {
    $('.form-control-tag').next('.tag-editor').find('.tag-editor-delete').click();
  });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27560722-2', 'auto');
  ga('send', 'pageview');

</script>
 -->