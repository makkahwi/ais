<tr style="color:red;">
    <th colspan="2">Files could be uploade only in these formats with maximum of 2MB size</th>
    <th>من الممكن تحميل الملفات بالصيغ التالية حصراً وبحجم لا يتجاوز 2 ميغابايت</th>
</tr>

<tr style="color:red;">
    <th colspan="3" style="text-align:center;"><br><u>PDF & JPG</u></th>
</tr>

<tr style="color:red;">
    <th colspan="2">You could use these tools to fix files</th>
    <th>من الممكن استخدام هذه الأدوات لتصحيح الملفات</th>
</tr>

<tr style="color:red;">
    <th colspan="3" style="text-align:center;">
    <a target="_blank" href="https://image.online-convert.com/convert-to-jpg"><u>Format Convert تحويل الصيغ</u></a>
    <br><a target="_blank" href="https://pdfcompressor.com/"><u>Compress PDF تصغير حجم ملفات</u></a>
    <br><a target="_blank" href="https://compressjpeg.com/"><u>Compress JPG تصغير حجم ملفات</u></a></th>
</tr>

<script type="text/javascript">
    function validateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 2) {
            alert('File size exceeds 2MB حجم الملف يتجاوز');
            $(file).val(''); //for clearing with Jquery
        } else {

        }
    }
</script>