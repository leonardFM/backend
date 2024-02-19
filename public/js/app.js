import './bootstrap';
import tinymce from 'tinymce/tinymce';

// Pilihan konfigurasi sesuai kebutuhan Anda
tinymce.init({
    selector: 'textarea.tinymce-editor',
    plugins: 'advlist autolink lists link image charmap print preview anchor',
    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
    menubar: false,
});