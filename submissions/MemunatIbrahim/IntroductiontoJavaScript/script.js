var person = {
    name: ['Memunat', 'Ibrahim'],
    age: 23,
    gender: 'Female',
    interests: ['Technology', 'Photography'],
    bio: function() {
    alert(this.name[0] + ' ' + this.name[1] + ' is ' + this.age +
    ' years old. She likes ' + this.interests[0] + ' and ' +
    this.interests[1] + '.');
    },
    greeting: function() {
    alert('Hi! I\'m ' + this.name[0] + '.');
    }
};