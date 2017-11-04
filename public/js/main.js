 var tasks = [
    { task: 'Install laravel framewrok', completed: true},
    { task: 'Github', completed: true },
    { task: 'Laravel', completed: true },
    { task: 'Vue.js', completed: true },
    { task: 'Send your work', completed: false },
];
 
 Vue.component('task-list', {
    template: `
        <div>
            <task v-for="task in tasks">{{task.task}}</task>
        </div>
    `,

    data() {
        return {
            tasks
        };
    }
});
Vue.component('task', {
    template: '<li><slot></slot></li>'
});

var app = new Vue({
    el: '#app',
    data: {
        title: 'Now title is being set throught JS.',
        newTask: '',
        className: 'color-red',
        class2: 'color-blue',
        names:['name1','name2'],
        isLoading : false,
        message: 'HELLO WORLD'
        // active:false
        //:disabled="active" @click="toggle" (add this to buton in the first )
    },
    computed: {
        reversedMessage() {
            return this.message.split('').reverse().join('');
        },
        isDisabled() {
            if(this.newTask == '')
                return true;
            else
                return false;
        }
    },
    methods: {
        addTask() {
            tasks.push({task: this.newTask, completed: false});
            this.newTask = '';
         },
         toggleClass() {
             this.isLoading = !this.isLoading;
        },
        toggle() {
            this.active=true;
         }
    }

});