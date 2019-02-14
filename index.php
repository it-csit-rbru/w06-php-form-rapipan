<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
      <fieldset id="sect1">
        <legend>ส่วนที่1 ข้อมูลผู้จัดทำโครงงาน</legend>
        <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
        <label for="sid">ชื่อ</label><input type="text" name="fname">
        <label for="sid">นามสกุล</label><input type="text" name="fname"><br>
        <label for="progame">สาขาวิชา</table>
        <select name="progame">
            <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="1">คอมพิวเตอร์ศึกษา</option>
            <option value="1">เทคโนโลยีสารสนเทศ</option>
            <option value="1">ภูมิสารสนเทศ</option>
            <option value="1">เทคดนโลยีสารสนเทศ</option>
        </select><br>
        <label for="progame">คณะ</table>
        <select name="progame">
            <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="1">คอมพิวเตอร์ศึกษา</option>
        </select><br>
        <label for="std_year">ชั้นปี</label>
        <input type="radio" name="std_year" value="1"><label>ปี1</label><br>    
        <input type="radio" name="std_year" value="1"><label>ปี2</label><br>    
        <input type="radio" name="std_year" value="1"><label>ปี3</label><br>    
        <input type="radio" name="std_year" value="1"><label>ปี4</label><br>    
        <input type="radio" name="std_year" value="1"><label>ปี5</label><br>    
    </fieldset>    
    <fieldset id="sect1">
        <legend>ส่วนที่2 ข้อมูลโครงงาน</legend>
        <label for="prt_name_th">ชื่อของโครงงาน(ไทย)</label><input type="textarea" name="pri_name_th">
        <label for="prt_name_th">ชื่อของโครงงาน(อังกฤษ)</label><input type="textarea" name="pri_name_th">
        <label for="progame">ประเภทโครงงาน</table>
        <select name="pri_type">
        <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="1">โครงงเพื่อการศึกษา</option>
            <option value="1">โครงานพัฒนาเครื่องมือ</option>
            <option value="1">โครงงานประเภททดลองทฤษฏี</option>
            <option value="1">โครงงานประเภทประยุกต์ใช้งาน</option>
            <option value="1">โครงงานประเภทพัฒนาเกม</option>
        </select>
        <label>เครืองมือที่ใช้ในากรพัฒนา</label>
        <input type="checkbox" name="prj_tool[]"><label>HTML</label>
        <input type="checkbox" name="prj_tool[]"><label>CSS</label>
        <input type="checkbox" name="prj_tool[]"><label>JavaScript</label>
        <input type="checkbox" name="prj_tool[]"><label>Bootstrap</label>
        <input type="checkbox" name="prj_tool[]"><label>Material</label>
        <input type="checkbox" name="prj_tool[]"><label>Angular</label>
        <input type="checkbox" name="prj_tool[]"><label>React</label>
        <input type="checkbox" name="prj_tool[]"><label>PHP</label>
        <input type="checkbox" name="prj_tool[]"><label>MySQL</label>
        <input type="checkbox" name="prj_tool[]"><label>ChartJS</label><br>
        <label>อาจารย์ที่ปรึกษา<></label>
        <select name="prj_advisor">
            <option value="1">ผศ.บุญเรื่อน   พฤกษ์ศิธร</option>
            <option value="1">ผศ.ทิพย์วรรณ  ฟูเฟื่อง</option>
        </select>   
     <input type="submit" value="Go...">
     </form>
</body>
</html>