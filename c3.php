<?php
// =====================
// Câu 8: Giải phương trình bậc 2
// =====================
function giaiPTB2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            return ($c == 0) ? "Phương trình vô số nghiệm" : "Phương trình vô nghiệm";
        } else {
            return "Phương trình có 1 nghiệm: x = " . (-$c / $b);
        }
    }

    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x = $x";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có 2 nghiệm: x1 = $x1, x2 = $x2";
    }
}

// =====================
// Câu 9: In hình chữ nhật rỗng 5x7 bằng dấu *
// =====================
function hinhChuNhatRong($dai, $rong) {
    for ($i = 1; $i <= $dai; $i++) {
        for ($j = 1; $j <= $rong; $j++) {
            if ($i == 1 || $i == $dai || $j == 1 || $j == $rong) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "<br>";
    }
}

// =====================
// Câu 10: Tính trung bình cộng của mảng
// =====================
function tinhTBC($arr) {
    if (count($arr) == 0) return 0;
    $tong = array_sum($arr);
    return $tong / count($arr);
}

// =====================
// Test các hàm
// =====================

// Câu 8
echo "<h3>Câu 8: Giải PT bậc 2 (x^2 - 3x + 2 = 0)</h3>";
echo giaiPTB2(1, -3, 2);
echo "<hr>";

// Câu 9
echo "<h3>Câu 9: Hình chữ nhật rỗng 5x7</h3>";
hinhChuNhatRong(5, 7);
echo "<hr>";

// Câu 10
echo "<h3>Câu 10: Trung bình cộng của mảng [2, 4, 6, 8, 10]</h3>";
$mang = [2, 4, 6, 8, 10];
echo "Kết quả = " . tinhTBC($mang);
?>
