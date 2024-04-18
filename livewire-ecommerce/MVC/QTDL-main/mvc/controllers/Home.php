<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();

    }

    function Show($a, $b){        
        // Call Models
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3

        // Call Views
        $this->view("admin", [
            "Page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->SinhVien()
        ]);
    }

    function ShowAll(){
        $ds = $this->model("SinhVienModel");
        $result = $ds->SinhVien();

        $this->view("admin",[
            "listSV"=>$result
        ]);
    }
}
?>