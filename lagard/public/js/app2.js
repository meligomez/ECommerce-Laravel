function count1(clase,valor){
    var counter = { var: 0 };
    TweenMax.to(counter, 3, {
      var: valor,
      onUpdate: function () {
        var number = Math.ceil(counter.var);
        $(clase).html(number);
        if(number === counter.var){ count.kill(); }
      },
      onComplete: function(){
        count();
      },
      ease:Circ.easeOut
    });
  }

  count1('.counter1',340);
  count1('.counter2',1500);
  count1('.counter3',50);
  count1('.counter4',560);
