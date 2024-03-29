<?php
/*!There are many useful file system functions in PHP that developers can use to interact with files and directories. Here are some of the most commonly used ones:

    file_exists(): Checks whether a file or directory exists.
    is_file(): Checks whether a path is a regular file.
    is_dir(): Checks whether a path is a directory.
    mkdir(): Creates a new directory.
    rmdir(): Deletes a directory.
    unlink(): Deletes a file.
    file_get_contents(): Reads the contents of a file into a string.
    file_put_contents(): Writes a string to a file.
    fopen(): Opens a file and returns a file pointer.
    fclose(): Closes an open file pointer.
    fread(): Reads from an open file pointer.
    fwrite(): Writes to an open file pointer.
    rename(): Renames a file or directory.
    copy(): Copies a file.
    scandir(): Reads the contents of a directory into an array.
    file(): Reads a file into an array, with each line of the file as an element in the array.
    filesize(): Returns the size of a file in bytes.
    filetype(): Returns the type of a file (e.g. "file", "dir", "link", etc.).
    glob(): Returns an array of file names that match a given pattern.
    realpath(): Returns the absolute path of a file or directory.
    basename(): Returns the base name of a file path.
    dirname(): Returns the directory name component of a file path.
    chmod(): Changes the permissions of a file or directory.
    chown(): Changes the owner of a file or directory.
    chgrp(): Changes the group of a file or directory.
    filemtime(): Returns the last modified time of a file.
    fileatime(): Returns the last access time of a file.
    filectime(): Returns the creation time of a file.
    fileinode(): Returns the inode number of a file.
    fileperms(): Returns the permissions of a file or directory.

     */

/*! As of PHP version 8.0.0, there are over 100 built-in file system functions. The exact number may vary depending on the specific version of PHP being used.

The large number of file system functions in PHP provides developers with a wide range of tools for working with files and directories. These functions can be used to perform tasks such as reading and writing files, creating and deleting directories, and managing file permissions and ownership.

While it may not be necessary to use all of the available file system functions, having a solid understanding of the most commonly used ones can be very helpful for working with files and directories in PHP.
 */
/*
basename — Returns trailing name component of path
chgrp — Changes file group
chmod — Changes file mode
chown — Changes file owner
clearstatcache — Clears file status cache
copy — Copies file
delete — See unlink or unset
dirname — Returns a parent directory's path
disk_free_space — Returns available space on filesystem or disk partition
disk_total_space — Returns the total size of a filesystem or disk partition
diskfreespace — Alias of disk_free_space
fclose — Closes an open file pointer
fdatasync — Synchronizes data (but not meta-data) to the file
feof — Tests for end-of-file on a file pointer
fflush — Flushes the output to a file
fgetc — Gets character from file pointer
fgetcsv — Gets line from file pointer and parse for CSV fields
fgets — Gets line from file pointer
fgetss — Gets line from file pointer and strip HTML tags
file_exists — Checks whether a file or directory exists
file_get_contents — Reads entire file into a string
file_put_contents — Write data to a file
file — Reads entire file into an array
fileatime — Gets last access time of file
filectime — Gets inode change time of file
filegroup — Gets file group
fileinode — Gets file inode
filemtime — Gets file modification time
fileowner — Gets file owner
fileperms — Gets file permissions
filesize — Gets file size
filetype — Gets file type
flock — Portable advisory file locking
fnmatch — Match filename against a pattern
fopen — Opens file or URL
fpassthru — Output all remaining data on a file pointer
fputcsv — Format line as CSV and write to file pointer
fputs — Alias of fwrite
fread — Binary-safe file read
fscanf — Parses input from a file according to a format
fseek — Seeks on a file pointer
fstat — Gets information about a file using an open file pointer
fsync — Synchronizes changes to the file (including meta-data)
ftell — Returns the current position of the file read/write pointer
ftruncate — Truncates a file to a given length
fwrite — Binary-safe file write
glob — Find pathnames matching a pattern
is_dir — Tells whether the filename is a directory
is_executable — Tells whether the filename is executable
is_file — Tells whether the filename is a regular file
is_link — Tells whether the filename is a symbolic link
is_readable — Tells whether a file exists and is readable
is_uploaded_file — Tells whether the file was uploaded via HTTP POST
is_writable — Tells whether the filename is writable
is_writeable — Alias of is_writable
lchgrp — Changes group ownership of symlink
lchown — Changes user ownership of symlink
link — Create a hard link
linkinfo — Gets information about a link
lstat — Gives information about a file or symbolic link
mkdir — Makes directory
move_uploaded_file — Moves an uploaded file to a new location
parse_ini_file — Parse a configuration file
parse_ini_string — Parse a configuration string
pathinfo — Returns information about a file path
pclose — Closes process file pointer
popen — Opens process file pointer
readfile — Outputs a file
readlink — Returns the target of a symbolic link
realpath_cache_get — Get realpath cache entries
realpath_cache_size — Get realpath cache size
realpath — Returns canonicalized absolute pathname
rename — Renames a file or directory
rewind — Rewind the position of a file pointer
rmdir — Removes directory
set_file_buffer — Alias of stream_set_write_buffer
stat — Gives information about a file
symlink — Creates a symbolic link
tempnam — Create file with unique file name
tmpfile — Creates a temporary file
touch — Sets access and modification time of file
umask — Changes the current umask
unlink — Deletes a file

 */