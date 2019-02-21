<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>회원가입 양식</title>
    </head>
    <body>
        <h2>회원가입 양식</h2>
        <form name="mem_form" method="post" action="mem_print.php">
            <input type="hidden" name="title" value="회원가입양식">
            <table border="1" width="640" cellpadding="4" cellspacing="1">
                <tr>
                    <td>* 아이디 :</td>
                    <td><input type="text" size="15" maxlength="12" name="id" value="guest"></td>
                </tr>
                <tr>
                    <td>* 이름 :</td>
                    <td><input type="text" size="15" maxlength="12" name="name"></td>
                </tr>
                <tr>
                    <td>* 비밀번호 :</td>
                    <td><input type="password" size="15" maxlength="10" name="passwd"></td>
                </tr>
                <tr>
                    <td>* 비밀번호확인 :</td>
                    <td><input type="password" size="15" maxlength="10" name="passwd_con"></td>
                </tr>
                <tr>
                    <td>성별 :</td>
                    <td><input type="radio" name="gender" value="M" checked>남
                    <input type="radio" name="gender" value="F">여</td>
                </tr>
                <tr>
                    <td>주소 :</td>
                    <td><input type="text" size="50" name="address"></td>
                </tr>
                <tr>
                    <td>취미 :</td>
                    <td><input type="checkbox" name="movie" value="yes" checked>영화감상 &nbsp; <input type="checkbox" name="book" value="yes">독서 &nbsp; <input type="checkbox" name="shop" value="yes">쇼핑 &nbsp; <input type="checkbox" name="sport" value="yes">운동</td>
                </tr>
                <tr>
                    <td>자기 소개</td>
                    <td><textarea name="intro" cols="60" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>제출 :</td>
                    <td><input type="submit" value="확인">
                    &nbsp;&nbsp;&nbsp;
                    <input type="reset" value="다시작성"></td>
                </tr>
            </table>
        </form>
    </body>
</html>