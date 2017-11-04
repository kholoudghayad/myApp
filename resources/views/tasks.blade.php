<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
    <style type="text/css">
        
        .color-red{ color: red;}
        .color-blue{ color:blue;}
        .is-loading { background: blueviolet;}
    
    </style>
</head>
	
<body>
    <div id="app">
        <h1 :class="className">@{{message}}</h1>
        <h2 :class="class2">@{{reversedMessage}}</h2>
        <task-list></task-list>
        <input id="taskName" type="text" v-model="newTask">
        <button v-on:click="addTask" v-bind:title="title" :class="{ 'is-loading' : isLoading }"
             @click="toggleClass" :disabled="isDisabled"> Add Task</button>
    </div>

    <script src="/js/vue.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>