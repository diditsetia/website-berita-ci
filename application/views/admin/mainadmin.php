<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themeon.net/nifty/v2.8/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2017 07:36:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
      $query = $this->db->get('tabel_header');
      $dataheader = $query->row_array();
    ?>
    <title><?php echo $dataheader['nama_perusahaan'] ?></title>
      <link rel="shortcut icon" href="<?php echo base_url('assets/admin/img/penyimpananfoto'.'/'.$dataheader['logo']); ?>">

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/fonts.googleapis.com/css13b7.css?family=Open+Sans:400,300,600,700')?>" rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url('assets/admin/css/nifty.min.css') ?>" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url('assets/admin/css/demo/nifty-demo-icons.min.css') ?>" rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url('assets/admin/css/demo/nifty-demo.min.css') ?>" rel="stylesheet">



    <!--Morris.js [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/plugins/morris-js/morris.min.css') ?>" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/plugins/magic-check/css/magic-check.min.css') ?>" rel="stylesheet">



    <!--Themify Icons [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/plugins/themify-icons/themify-icons.min.css') ?>" rel="stylesheet">

    <!--Summernote [ OPTIONAL ]-->
    <link href="<?php echo base_url('assets/admin/plugins/summernote/summernote.min.css" rel="stylesheet') ?>">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="<?php echo base_url('assets/admin/plugins/animate-css/animate.min.css') ?>" rel="stylesheet">

    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?php echo base_url('assets/admin/plugins/pace/pace.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/admin/plugins/pace/pace.min.js') ?>"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="<?php echo base_url('assets/admin/js/jquery.min.js') ?>"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js') ?>"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url('assets/admin/js/nifty.min.js') ?>"></script>


    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/nifty-demo.min.js') ?>"></script>


    <!--Morris.js [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/morris-js/morris.min.js') ?>"></script>
	  <script src="<?php echo base_url('assets/admin/plugins/morris-js/raphael-js/raphael.min.js') ?>"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/dashboard.js') ?>"></script>


    <!--Icons [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/icons.js') ?>"> </script>

    <!--Form File Upload [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/form-file-upload.js') ?>"></script>

    <!--Dropzone [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/dropzone/dropzone.min.js') ?>"></script>

    <!--Bootstrap Wizard [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') ?>"></script>


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/bootstrap-validator/bootstrapValidator.min.js') ?>"></script>


    <!--Form Wizard [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/form-wizard.js') ?>"></script>

    <!--Summernote [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/summernote/summernote.min.js') ?>"></script>


    <!--Form File Upload [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/form-text-editor.js') ?>"></script>

    <script src="<?php echo base_url('assets/admin/js/demo/bg-images.js') ?>"></script>

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/nifty-demo.min.js') ?>"></script>


    <!--Flot Chart [ OPTIONAL ]-->
    <script src="<?php echo base_url('assets/admin/plugins/flot-charts/jquery.flot.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/plugins/flot-charts/jquery.flot.stack.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/admin/plugins/flot-charts/jquery.flot.resize.min.js') ?>"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="<?php echo base_url('assets/admin/js/demo/dashboard-2.js') ?>"></script>


    <script src="<?php echo base_url('assets/admin/plugins/bootbox/bootbox.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/admin/js/demo/ui-modals.js')?>"></script>

    <!-- editor text -->

    <script src="<?php echo base_url();?>assets/tinymcerun/js/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url();?>assets/tinymcerun/js/tinymce/tinymce.dev.js"></script>
    <script src="<?php echo base_url();?>assets/tinymcerun/js/tinymce/plugins/table/plugin.dev.js"></script>
    <script src="<?php echo base_url();?>assets/tinymcerun/js/tinymce/plugins/paste/plugin.dev.js"></script>
    <script src="<?php echo base_url();?>assets/tinymcerun/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
    <script src="<?php echo base_url();?>assets/tinymcerun/js/tinymce/plugins/codesample/plugin.dev.js"></script>

    <script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorvisi",
        height: 200,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],
    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],

    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditormisi",
        height: 200,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],
    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],

    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorisiberita",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditoreditvisi",
        height: 200,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditoreditmisi",
        height: 200,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorsejarah",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }

    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorlayanan",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditorpenutup",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>

<script type="text/javascript">


  tinymce.init({
    //selector: "textarea",
    mode : "specific_textareas",
        editor_selector : "mceEditordaftarpustaka",
        height: 350,
    theme: "modern",
    language: "en",
    plugins: [
      "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker codesample tiny_mce_wiris "
    ],

    external_plugins: {
      //"moxiemanager": "/moxiemanager-php/plugin.js"
    },
    content_css: "css/development.css",
    add_unload_trigger: false,
    autosave_ask_before_unload: false,

    toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
    toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage codesample | tiny_mce_wiris_formulaEditor tiny_mce_wiris_formulaEditorChemistry ",
    // menubar: false,
    toolbar_items_size: 'small',

    style_formats: [
      {title: 'Bold text', inline: 'b'},
      {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
      {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
      {title: 'Example 1', inline: 'span', classes: 'example1'},
      {title: 'Example 2', inline: 'span', classes: 'example2'},
      {title: 'Table styles'},
      {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],

    templates: [
      {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
      {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
    ],


    setup: function(ed) {
      /*ed.on(
        'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
        'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
        'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
        console.log(e.type, e);
      });*/
    },

        spellchecker_callback: function(method, data, success) {
      if (method == "spellcheck") {
        var words = data.match(this.getWordCharPattern());
        var suggestions = {};

        for (var i = 0; i < words.length; i++) {
          suggestions[words[i]] = ["First", "second"];
        }

        success({words: suggestions, dictionary: true});
      }

      if (method == "addToDictionary") {
        success();
      }
    }
  });

</script>


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
  <div id="container" class="effect aside-float aside-bright mainnav-lg">
      <!--NAVBAR-->
      <!--===================================================-->
          <?php echo $header;?>
      <!--===================================================-->
      <!--END NAVBAR-->

      <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
          <?php echo $konten;?>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->


        <!--MAIN NAVIGATION-->
        <!--===================================================-->
            <?php echo $sidebar;?>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

      </div>

        <!-- FOOTER -->
        <!--===================================================-->
            <?php echo $footer;?>
        <!--===================================================-->
        <!-- END FOOTER -->

        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->

  </div>
      <!--===================================================-->
      <!-- END OF CONTAINER -->

</body>
<!-- Mirrored from www.themeon.net/nifty/v2.8/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2017 07:39:05 GMT -->
</html>
