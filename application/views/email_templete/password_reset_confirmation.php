<?php  
$password_reset_confirmation = '
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>'.$app_name.'</title>    
</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    <center>
        <table style="padding:30px 10px;background:#F4F4F4;width:100%;font-family:arial" cellpadding="0" cellspacing="0">
                
                <tbody>
                    <tr>
                        <td>
                        
                            <table style="max-width:940px;min-width:320px" align="center" cellspacing="0">
                                <tbody>
                                
                                    <tr>
                                        <td style="background:#fff;border:1px solid #D8D8D8;padding:30px 30px" align="center">
                                        
                                            <table align="center">
                                                <tbody>
                                                
                                                    <tr>
                                                        <td style="border-bottom:1px solid #D8D8D8;color:#666;text-align:center;padding-bottom:30px">
                                                            
                                                            <table style="margin:auto" align="center">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="color:#005f84;font-size:22px;font-weight:bold;text-align:center;font-family:arial">
                                                                
                                                                            Complete has changed..
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                               <td style="color:#666;padding:15px; padding-bottom:0;font-size:14px;line-height:20px;font-family:arial;text-align:left">                                    
                                                    <div style="font-style:normal;padding-bottom:15px;font-family:arial;line-height:20px;text-align:left">                                                    
                                                        <p><span style="font-weight:bold;font-size:16px">Your Password has changed.</p>
                                                        <p><span style="font-weight:bold;font-size:16px">You can login </span><a href="'.base_url().'"> here </a></p>                                                        
                                                      </div>
                                                            
                                                        </td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                            
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td style="background:#f9f9f9;border:1px solid #D8D8D8;border-top:none;padding:24px 10px" align="center">
                                            
                                            <table style="width:100%;max-width:650px" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size:16px;line-height:22px;text-align:center;max-width:650px">
                                                            <a href="http://spagreen.net" style="text-decoration:none;color:#69696c" target="_blank">
                                                                <span style="color:#00ce00;font-weight:bold;max-width:180px">Powered by:</span> 
                                                                '.$app_name.'
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <table style="max-width:650px" align="center">
                                <tbody>
                                    <tr>
                                        <td style="color:#b4b4b4;font-size:11px;padding-top:10px;line-height:15px;font-family:arial">
                                            <span> &copy; '.$app_name.' '.date("Y").' - ALL RIGHTS RESERVED </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
            </tbody>
        </table>
    </center>
</body>
</html>';
?>