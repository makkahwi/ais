<!-- Instructions Field -->
<div class="form-group col-md-6">
    <label style="color:red; text-align: center;">
        <table>
            <tr>
                <td>Files could be uploade only in these formats with maximum of 2MB size</td>
                <td>من الممكن تحميل الملفات بالصيغ التالية حصراً وبحجم لا يتجاوز 2 ميغابايت</td>
            </tr>
            <tr>
                <td colspan="2"><br><u>PDF & JPG</u></td>
            </tr>
        </table>
    </label>
</div>

<!-- File Formats Field -->
<div class="form-group col-md-6">
    <label style="color:red; text-align: center;">
        <table>
            <tr>
                <td>You could use these tools to fix files</td>
                <td>من الممكن استخدام هذه الأدوات لتصحيح الملفات</td>
            </tr>
            <tr>
                <td colspan="2">
                <a target="_blank" href="https://image.online-convert.com/convert-to-jpg"><u>Format Convert تحويل الصيغ</u></a>
                <br><a target="_blank" href="https://pdfcompressor.com/"><u>Compress PDF تصغير حجم ملفات</u></a>
                <br><a target="_blank" href="https://compressjpeg.com/"><u>Compress JPG تصغير حجم ملفات</u></a></td>
            </tr>
        </table>
    </label>
</div>

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