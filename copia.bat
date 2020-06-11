echo on
echo DROPBOX
xcopy  c:\web\ondetemforro8\backup\*.*  D:\Dropbox\Desenvolvimento\web\ondetemforro8\backup\*.* /Y /E
xcopy  c:\web\ondetemforro8\themes\ondetem\*.* D:\Dropbox\Desenvolvimento\web\ondetemforro8\themes\ondetem\*.* /Y /E
1xcopy  c:\web\ondetemforro8\modules\*.* D:\Dropbox\Desenvolvimento\web\ondetemforro8\modules\*.* /Y /E
echo GIT
xcopy  c:\web\ondetemforro8\themes\ondetem\*.* c:\git\ondetemforro\themes\ondetem\*.* /Y /E
xcopy  c:\web\ondetemforro8\modules\*.* c:\git\ondetemforro\modules\*.* /Y /E

