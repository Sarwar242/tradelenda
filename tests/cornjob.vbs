Set WinScriptHost = CreateObject("WScript.Shell")
WinScriptHost.Run Chr(34) & "C:\laragon\www\EmailOtp\tests\script.bat" & Chr(34), 0
Set WinScriptHost = Nothing