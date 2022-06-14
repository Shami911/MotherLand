// document.getElementById('booking').onclick = function () {
//     let dateStart = document.getElementById('start-date').value;
//     let dateEnd = document.getElementById('end-date').value;
//     dateStart = Date.parse(dateStart);
//     dateEnd = Date.parse(dateEnd);


//     console.log(dateEnd - dateStart);

// }
const { createApp } = Vue

createApp({
    data() {
        return {
            dateStart: 0,
            dateEnd: 0,
            selectedBook: '',
            selectedBookPrice: 0,
            selectedDays: 0,
            selectedPeople: '',

        }
    },
    methods: {
        getResult() {
            result = Date.parse(this.dateEnd) - Date.parse(this.dateStart)
            if (this.dateStart >= this.dateEnd) {
                this.dateEnd = 0
            }
            return Number(result)
        },
        getTripCost() {
            price = Number(this.selectedBook)
            oneDay = 1000 * 60 * 60 * 24
            days = Math.round(this.getResult() / oneDay)
            this.selectedDays = days
            // console.log(this.selectedPeople)
            // Number(this.selectedPeople) в данный момент умножается на сумму, сделайте похже как надо :-)
            if (Number(this.selectedPeople) > 2) {
                this.selectedBookPrice = price * days + days * 1000
            } else {
                this.selectedBookPrice = price * days
            }
        },
        getMinDate(inputID) {
            var min;
            if (inputID == 1) {
                min = new Date().toISOString().split('T')[0]
            } else {
                min = new Date(new Date().setDate(new Date(this.dateStart).getDate() + 1)).toISOString().split('T')[0]
            }
            console.log(new Date().toISOString().split('T')[0], this.dateStart)
            return min
        },
    }
}).mount('#main')