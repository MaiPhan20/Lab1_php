<HTML>
<HEAD>
    <TITLE>Employee Details</TITLE>
</HEAD>
<BODY>
<H4>ENTER YOUR DETAILS</H4>
<FORM METHOD=POST ACTION="Snippet4.php">
    <TABLE>
        <TR>
            <TD>EMPLOYEE ID</TD>
            <TD><INPUT TYPE="TEXT" NAME="EMPID"></TD>
        </TR>
        <TR>
            <TD>NAME</TD>
            <TD><INPUT TYPE="TEXT" NAME="NAME"></TD>
        </TR>
        <TR>
            <TD>DEPARTMENT</TD>
            <TD>
                <INPUT TYPE="RADIO" NAME="DEPT" VALUE="FINANCE">FINANCE
                <INPUT TYPE="RADIO" NAME="DEPT" VALUE="MARKETING">MARKETING
                <INPUT TYPE="RADIO" NAME="DEPT" VALUE="IT">IT
            </TD>
        <TR>
            <TD>EMAIL</TD>
            <TD><INPUT TYPE="TEXT" NAME="EMAIL"></TD>
        </TR>
    </TABLE>
    <BR>
    <TD><INPUT TYPE="SUBMIT" VALUE="SUBMIT"></TD>
</FORM>
</BODY>
</HTML