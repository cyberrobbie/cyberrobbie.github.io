    //function countup() {
    var options = {
        useEasing: true,
        useGrouping: true,
        // separator: "",
        // decimal: "",
        // suffix: "+"
    };

    var demo1 = new CountUp("counter1", 0, $("#counter1").text(), 0, 5, options);
    demo1.start();

    var demo2 = new CountUp("counter2", 0, $("#counter2").text(), 0, 5, options);
    demo2.start();

    var demo3 = new CountUp("counter3", 0, $("#counter3").text(), 0, 5, options);
    demo3.start();

    var demo4 = new CountUp("counter4", 0, $("#counter4").text(), 0, 5, options);
    demo4.start();

    // }

    // countup();
    // function countup1() {
    // var options1 = {
    //     useEasing: true,
    //     useGrouping: true,
    //     // separator: "",
    //     // decimal: "",
    //     suffix: "+"
    // };

    var demo1 = new CountUp("demo1Target", 0, 3882, 0, 2.5);
    demo1.start()

    var demo2 = new CountUp("demo2Target", 3882, 0, 0, 2.5);
    demo2.start()

    var demo3 = new CountUp("demo3Target", 98, 475, 0, 2.5);
    demo3.start()

    // DEMO 2
    // var demo2 = new CountUp("counter1", 0, $("#counter1").text(), 0, 5, options1);
    // if (!demo2.error) {
    //     demo2.start();
    // } else {
    //     console.error(demo2.error);
    // }
    // }
    // countup1();