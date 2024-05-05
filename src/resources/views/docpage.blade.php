@extends('layouts.layout')
@push('styles')
<!-- Highlight.js CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/default.min.css">
@endpush
@section('body')
<div class="doc-body">
  <nav id="navbar-doc">
    <header class="title">Java Documentation</header>
    <ul>
      <li>
        <a class="nav-link" href="#Getting_Started_With_Java">Getting Started With Java</a>
      </li>
      <li>
        <a class="nav-link" href="#Java_Entry_Point">Java Entry Point</a>
      </li>
      <li>
        <a class="nav-link" href="#Printing_to_the_console">Printing to the console</a>
      </li>
      <li>
        <a class="nav-link" href="#Declaring_Functions">Declaring Functions</a>
      </li>
      <li>
        <a class="nav-link" href="#Object_Oriented_Programming">Object Oriented Programming</a>
      </li>
    </ul>
  </nav>
  <main id="main-doc" >
    <article class="main-article" id="Getting_Started_With_Java">
      <header>Getting Started With Java</header>
      <p>Steps for getting started</p>
      <ul>
        <li>Download Java</li>
        <li>Download Java SDK(Software Development Kit) </li>
        <li>Download any IDE(Integrated Development Enviroment) which can run Java SDK on it.</li>
        <li>Start a new Project within the IDE</li>
        <li>Code up "Hello World" and run the code.</li>
      </ul>
    </article>
    <article class="main-article" id="Java_Entry_Point" >
      <header>Java Entry Point</header>
      <p>
        Java is a versatile and widely-used programming language. At its core, Java programs start execution from a special method known as the "main" method.
    </p>

    <p>
        The main method serves as the entry point for Java applications. It has a specific signature and acts as the starting point for the program's execution. When you run a Java program, the Java Virtual Machine (JVM) looks for the main method to begin execution.
    </p>

    <p> Here's a simple example of a Java main method: </p>

    <pre><code class="java">
        public class MyFirstJavaProgram {
            public static void main(String[] args) {
                System.out.println("Hello, Java!");
            }
        }
    </code></pre>
    </article>
    <article class="main-article" id="Printing_to_the_console">
      <header>Printing to the console</header>
      <p>
        In Java, you can use the System.out.println() statement to print text to the console. This statement is commonly used for displaying messages, variables, or any information during the execution of a Java program.
    </p>
    <p>
      Here's a simple example: </p>

      <pre><code class="java">
          public class ConsolePrintingExample {
              public static void main(String[] args) {
                  String message = "Hello, Java Console!";
                  System.out.println(message);
              }
          }
      </code></pre>
      <p>When you run this program, it will print the message "Hello, Java Console!" to the console.</p>
    </article>
    <article class="main-article" id="Declaring_Functions">
      <header>Declaring Functions</header>
      <p>
        Functions are called methods in Java. Here is an example of how to declare a Java method.
      </p>
      <img src="https://media.geeksforgeeks.org/wp-content/uploads/methods-in-java.png" alt="Java">
    </article>
    <article class="main-article" id="Object_Oriented_Programming">
      <header>Object Oriented Programming</header>
      <p>
        Object-Oriented Programming (OOP) is a programming paradigm that organizes code based on the concept of "objects." An object is a self-contained unit that represents a real-world entity and encapsulates data and behavior associated with that entity. These objects can interact with each other, making it easier to model and design complex systems.
    </p>

    <p>
        The core principles of OOP include <strong>encapsulation</strong>, <strong>inheritance</strong>, and <strong>polymorphism</strong>. Encapsulation involves bundling data (attributes) and methods (functions) that operate on the data within a single unit or class. Inheritance allows a new class to inherit the properties and behaviors of an existing class, promoting code reuse. Polymorphism enables objects to take on multiple forms, allowing flexibility and abstraction in programming.
    </p>

    <p>
        Here's a simple example of a Java class demonstrating OOP concepts:</p>
        <pre><code class="java">
          public class Animal {
              String name;

              public Animal(String name) {
                  this.name = name;
              }

              public void makeSound() {
                  System.out.println("Some generic animal sound");
              }
          }
      </code></pre>
    <p>In this example, the "Animal" class encapsulates the data (name) and behavior (makeSound method). You can then create instances of this class, representing specific animals, and extend it to create more specialized classes using inheritance.
    </p>
    </article>
  </main>
</div>

<!-- Highlight.js JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
@endsection
