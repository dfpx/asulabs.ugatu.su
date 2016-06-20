function Clock(_id_of_clock_element) {
    var self = this,
        timeOut = null,
        id_of_clock_element = _id_of_clock_element ? _id_of_clock_element : 'clock',
        clock_element = document.getElementById(id_of_clock_element);


    this.startClock = function() {
        if (!clock_element || clock_element.length < 1) {
            alert('Clock container element is invalid, maybe you initialized the clock with the wrong element id!');
            return false;
        }
        var today = new Date(),
            hours = today.getHours(),
            minutes = today.getMinutes(),
            seconds = today.getSeconds();

        // add a zero in front of numbers < 10
        minutes = self.checkTime(minutes);
        seconds = self.checkTime(seconds);

        clock_element.innerHTML = hours + ":" + minutes + ":" + seconds;

        timeOut = setTimeout(self.startClock, 500);
    };

    this.checkTime = function(i) {
        if (isNaN(i)) {
            return false;
        }

        if (i < 10) {
            i = "0" + i;
        }
        return i;
    };

    this.stopClock = function() {
        clearTimeout(timeOut);
    };

    this.startClock();
}

window.addEventListener('load', function() {
    var clock = new Clock('clock');

    document.getElementById('clock_stop').addEventListener("click", function() {
        clock.stopClock();
    }, false);
    document.getElementById('clock_start').addEventListener("click", function() {
        clock.startClock();
    }, false);

}, false);