function inputInt(_6e,_6f){
    if(_6e.value==""){
        return true;
    }
    var i,c,value;
    value="";
    for(i=0;i<_6e.value.length;i++){
        c=_6e.value.charAt(i);
        if(c=="-"){
            if(i==0&&_6f==true){
                value+=c;
            }
        }else{
            if(c>="0"&&c<="9"){
                value+=c;
            }
        }
    }
    if(_6e.value!=value){
        _6e.value=value;
    }
}