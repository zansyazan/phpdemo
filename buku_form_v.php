<?php

    echo form_open('buku/save/'.$is_update);

    echo form_hidden('id', '');

    echo "Judul : ".form_input('judul', '', "size='50' maxlength='100'"); // Add a semicolon here
    echo "<br /><br />";

    echo "Pengarang: ".form_input('pengarang', '', "size='50' maxlength='150'"); 
    echo "<br /><br />";
    
    echo "Kategori : ".form_dropdown('kategori',$opt_kategori, '');
    echo "<br /><br />";

    echo form_submit('btn_simpan', 'Simpan');

    echo form_close();
    
?>
