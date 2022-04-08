$(document).on("ready", function () {
    var dataSet = [
        {
            service: "C Corporation",
            state: "California",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 125 },
                { futureYearPlan: 129, annually: 25 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 125 },
                { futureYearPlan: 249, annually: 25 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 125 },
                { futureYearPlan: 329, annually: 25 },
            ],
        },
        {
            service: "C Corporation",
            state: "Delaware",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 89 },
                { futureYearPlan: 129, annually: 400 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 89 },
                { futureYearPlan: 249, annually: 400 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 89 },
                { futureYearPlan: 329, annually: 400 },
            ],
        },
        {
            service: "C Corporation",
            state: "New York",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 130 },
                { futureYearPlan: 129, annually: 18 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 130 },
                { futureYearPlan: 249, annually: 18 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 130 },
                { futureYearPlan: 329, annually: 18 },
            ],
        },
        {
            service: "C Corporation",
            state: "Nevada",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 725 },
                { futureYearPlan: 129, annually: 200 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 725 },
                { futureYearPlan: 249, annually: 200 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 725 },
                { futureYearPlan: 329, annually: 200 },
            ],
        },
        {
            service: "C Corporation",
            state: "Wyoming",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 102 },
                { futureYearPlan: 129, annually: 52 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 102 },
                { futureYearPlan: 249, annually: 52 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 102 },
                { futureYearPlan: 329, annually: 52 },
            ],
        },
        {
            service: "S Corporation (US Residents Only)",
            state: "California",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 125 },
                { futureYearPlan: 129, annually: 0 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 125 },
                { futureYearPlan: 249, annually: 0 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 125 },
                { futureYearPlan: 329, annually: 0 },
            ],
        },
        {
            service: "S Corporation (US Residents Only)",
            state: "Delaware",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 89 },
                { futureYearPlan: 129, annually: 0 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 89 },
                { futureYearPlan: 249, annually: 0 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 89 },
                { futureYearPlan: 329, annually: 0 },
            ],
        },
        {
            service: "S Corporation (US Residents Only)",
            state: "New York",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 130 },
                { futureYearPlan: 129, annually: 0 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 130 },
                { futureYearPlan: 249, annually: 0 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 130 },
                { futureYearPlan: 329, annually: 0 },
            ],
        },
        {
            service: "S Corporation (US Residents Only)",
            state: "Nevada",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 725 },
                { futureYearPlan: 129, annually: 0 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 725 },
                { futureYearPlan: 249, annually: 0 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 725 },
                { futureYearPlan: 329, annually: 0 },
            ],
        },
        {
            service: "S Corporation (US Residents Only)",
            state: "Wyoming",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 102 },
                { futureYearPlan: 129, annually: 0 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 102 },
                { futureYearPlan: 249, annually: 0 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 102 },
                { futureYearPlan: 329, annually: 0 },
            ],
        },
        {
            service: "Limited Liability Company (LLC)",
            state: "California",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 75 },
                { futureYearPlan: 129, annually: 820 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 75 },
                { futureYearPlan: 249, annually: 820 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 75 },
                { futureYearPlan: 329, annually: 820 },
            ],
        },
        {
            service: "Limited Liability Company (LLC)",
            state: "Delaware",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 89 },
                { futureYearPlan: 129, annually: 300 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 89 },
                { futureYearPlan: 249, annually: 300 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 89 },
                { futureYearPlan: 329, annually: 300 },
            ],
        },
        {
            service: "Limited Liability Company (LLC)",
            state: "New York",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 205 },
                { futureYearPlan: 129, annually: 9 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 205 },
                { futureYearPlan: 249, annually: 9 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 205 },
                { futureYearPlan: 329, annually: 9 },
            ],
        },
        {
            service: "Limited Liability Company (LLC)",
            state: "Nevada",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 425 },
                { futureYearPlan: 129, annually: 700 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 425 },
                { futureYearPlan: 249, annually: 700 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 425 },
                { futureYearPlan: 329, annually: 700 },
            ],
        },
        {
            service: "Limited Liability Company (LLC)",
            state: "Wyoming",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 102 },
                { futureYearPlan: 129, annually: 52 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 102 },
                { futureYearPlan: 249, annually: 52 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 102 },
                { futureYearPlan: 329, annually: 52 },
            ],
        },
        {
            service: "Nonprofit",
            state: "California",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 30 },
                { futureYearPlan: 129, annually: 0 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 30 },
                { futureYearPlan: 249, annually: 0 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 30 },
                { futureYearPlan: 329, annually: 0 },
            ],
        },
        {
            service: "Nonprofit",
            state: "Delaware",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 105 },
                { futureYearPlan: 129, annually: 0 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 105 },
                { futureYearPlan: 249, annually: 0 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 105 },
                { futureYearPlan: 329, annually: 0 },
            ],
        },
        {
            service: "Nonprofit",
            state: "New York",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 75 },
                { futureYearPlan: 129, annually: 0 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 75 },
                { futureYearPlan: 249, annually: 0 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 75 },
                { futureYearPlan: 329, annually: 0 },
            ],
        },
        {
            service: "Nonprofit",
            state: "Nevada",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 100 },
                { futureYearPlan: 129, annually: 150 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 100 },
                { futureYearPlan: 249, annually: 150 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 100 },
                { futureYearPlan: 329, annually: 150 },
            ],
        },
        {
            service: "Nonprofit",
            state: "Wyoming",
            basicPriceTable: [
                { firstYearPlan: 129, stateFees: 27 },
                { futureYearPlan: 129, annually: 0 },
            ],
            plusPriceTable: [
                { firstYearPlan: 249, stateFees: 27 },
                { futureYearPlan: 249, annually: 0 },
            ],
            proPriceTable: [
                { firstYearPlan: 329, stateFees: 27 },
                { futureYearPlan: 329, annually: 0 },
            ],
        },
    ];

    var serviceVal, stateVal;

    var basicPriceDiv = $("#basicPrice");
    var basicStateFeeDiv = $("#basicStateFee");
    var basicTotalDiv = $("#basicTotal");
    var basicFuturePriceDiv = $("#basicFuturePrice");
    var basicAnnualPriceDiv = $("#basicAnnualPrice");
    var basicFutureTotalDiv = $("#basicFutureTotal");

    var proPriceDiv = $("#proPrice");
    var proStateFeeDiv = $("#proStateFee");
    var proTotalDiv = $("#proTotal");

    var proFuturePriceDiv = $("#proFuturePrice");
    var proAnnualPriceDiv = $("#proAnnualPrice");
    var proFutureTotalDiv = $("#proFutureTotal");

    var plusPriceDiv = $("#plusPrice");
    var plusStateFeeDiv = $("#plusStateFee");
    var plusTotalDiv = $("#plusTotal");

    var plusFuturePriceDiv = $("#plusFuturePrice");
    var plusAnnualPriceDiv = $("#plusAnnualPrice");
    var plusFutureTotalDiv = $("#plusFutureTotal");

    var filterdDataSet = [];

    $("#serviceOptions").change(function () {
        serviceVal = $("#serviceOptions option:selected").text();
        stateVal = $("#stateOptions option:selected").text();
        $.fn.onSelectBoxChange(serviceVal, stateVal);
    });

    $("#stateOptions").change(function () {
        stateVal = $("#stateOptions option:selected").text();
        serviceVal = $("#serviceOptions option:selected").text();
        $.fn.onSelectBoxChange(serviceVal, stateVal);
    });

    $.fn.onSelectBoxChange = function (service, state) {
        var found_data = $.grep(dataSet, function (data) {
            return data.service === service && data.state === state;
        });
        if (found_data.length !== 0) {
            console.log(found_data[0].basicPriceTable[0].firstYearPlan);

            // Basic Price
            var basicPrice = found_data[0].basicPriceTable[0].firstYearPlan;
            var basicStateFee = found_data[0].basicPriceTable[0].stateFees;
            var basicTotal = basicPrice + basicStateFee;

            var basicFuturePrice =
                found_data[0].basicPriceTable[1].futureYearPlan;
            var basicAnnualPrice = found_data[0].basicPriceTable[1].annually;
            var basicFutureTotal = basicFuturePrice + basicAnnualPrice;

            // Pro Price
            var proPrice = found_data[0].proPriceTable[0].firstYearPlan;
            var proStateFee = found_data[0].proPriceTable[0].stateFees;
            var proTotal = proPrice + proStateFee;

            var proFuturePrice = found_data[0].proPriceTable[1].futureYearPlan;
            var proAnnualPrice = found_data[0].proPriceTable[1].annually;
            var proFutureTotal = proFuturePrice + proAnnualPrice;

            // Plus
            var plusPrice = found_data[0].plusPriceTable[0].firstYearPlan;
            var plusStateFee = found_data[0].plusPriceTable[0].stateFees;
            var plusTotal = plusPrice + plusStateFee;

            var plusFuturePrice =
                found_data[0].plusPriceTable[1].futureYearPlan;
            var plusAnnualPrice = found_data[0].plusPriceTable[1].annually;
            var plusFutureTotal = plusFuturePrice + plusAnnualPrice;

            filterdDataSet = new Array({
                basicPrice,
                basicStateFee,
                basicTotal,
                basicFuturePrice,
                basicAnnualPrice,
                basicFutureTotal,
                proPrice,
                proStateFee,
                proTotal,
                proFuturePrice,
                proAnnualPrice,
                proFutureTotal,
                plusPrice,
                plusStateFee,
                plusTotal,
                plusFuturePrice,
                plusAnnualPrice,
                plusFutureTotal,
            });

            // console.log(filterdDataSet)
            $.fn.setPriceFromDataSet();
        } else {
            console.log("no data found !!");
        }
    };
    $.fn.setPriceFromDataSet = function () {
        basicPriceDiv.text(filterdDataSet[0].basicPrice);
        basicStateFeeDiv.text(filterdDataSet[0].basicStateFee);
        basicTotalDiv.text(filterdDataSet[0].basicTotal);

        basicFuturePriceDiv.text(filterdDataSet[0].basicFuturePrice);
        basicAnnualPriceDiv.text(filterdDataSet[0].basicAnnualPrice);
        basicFutureTotalDiv.text(filterdDataSet[0].basicFutureTotal);

        proPriceDiv.text(filterdDataSet[0].proPrice);
        proStateFeeDiv.text(filterdDataSet[0].proStateFee);
        proTotalDiv.text(filterdDataSet[0].proTotal);

        proFuturePriceDiv.text(filterdDataSet[0].proFuturePrice);
        proAnnualPriceDiv.text(filterdDataSet[0].proAnnualPrice);
        proFutureTotalDiv.text(filterdDataSet[0].proFutureTotal);

        plusPriceDiv.text(filterdDataSet[0].plusPrice);
        plusStateFeeDiv.text(filterdDataSet[0].plusStateFee);
        plusTotalDiv.text(filterdDataSet[0].plusTotal);

        plusFuturePriceDiv.text(filterdDataSet[0].plusFuturePrice);
        plusAnnualPriceDiv.text(filterdDataSet[0].plusAnnualPrice);
        plusFuturePriceDiv.text(filterdDataSet[0].plusFutureTotal);
    };
});
