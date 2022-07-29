function solution($X, $Y, $D) {
    $jumps=0;
    
    if($X==$Y){
        return 0;
    }
    if($X+$D>=$Y){
        return 1;
        
    }else{

$disttocover=$Y-$X;

if($disttocover%$D==0){
    $jumps+=($disttocover/$D);
}else{
    $jumps+=intval($disttocover/$D);
    
    $jumps+=1;
    
}
    }
    return $jumps;
    
}
