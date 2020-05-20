tinymce.init({
  selector: 'textarea#basic-1',
  height: 200,
  menubar: false,
  statusbar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar: 'formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'forecolor'
});

tinymce.init({
  selector: 'textarea#basic-2',
  height: 200,
  menubar: false,
  statusbar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | '
});
