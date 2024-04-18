<?php

#Question1• What Is Object Oriented Programming?

/*Ans.--
        Object Oriented Programming is a computer programming model that 
        organizes softwere design around data,or objects rather than functions and logic.
        As object can be define  as a data field that has unique attributes and behavior.

        The structure, or building blocks of object oriented programming include the following-:

        a) Class
        b) Object
        c) Method
        c) Attributes
        e) Inheritance
        f) Incapsulation
        g) Abstraction
        h) Polymorphysim



    Question2 • What Are Properties Of Object Oriented Systems? 
       Ans..
            The properties of OOP system is following
                    a) Classes
                    b) Objects
                    c) Methods 
                    d) Attributes
                    e) Abstraction
                    f) Inheritance
                    g) Incapsulation
                    h) Polymorphism


                   
        Question3. • What Is Difference Between Class And Interface? 

        Ans..
                Interface is a Blueprint for a Class while Class is BluePrint for a 
                Object.we can't instansiate the Interface while Class is instansitaed.
                we can define only public method in interface while in the case of class
                we can define public,protected and private access modifire.
                one class can use multiple interface.

         Question4. • What Is Overloading? 
         Ans..
                Overloading in a type of Polymorphysm where we can pass the varing parameter 
                in a same name function in a class and perform different operation.


         Question4. •What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with
                    Example ?
                    Ans..
                         The Scope Resolution Operator are also known as Paamayim Nekudotayim
                         or more commonly known as the double colon.
                         it is a token the allow access to static, contant or overridden properties 
                         or methods of a class. 

                         Ex.*/
                    
                         class demo{
                            //properties of class
                            public static $num = 10;
                            //method of class
                            public static function fnum(){
                                echo static::$num."<br>";
                            }

                         }
                         class child extends demo{
                                public static $num = 20;
                         }
                        demo::$num;
                        child::$num;

         # • What are the differences between abstract classes and interfaces?    
           /*Ans..
                     Abstract class
                  a) Abstract class is designed to be inherited but not instantiated.
                  it show only useful information remaining are hide for end user.
                  b) An abstract class is a class that has at least one abstract method and 
                     method can have only names and arguments and no other code.

                     Interface
                     a)Interface is a blueprint for a classes that defines the methods a class
                       must implements. it is a good way to allow allow many difference classes 
                       to be used in the same way.when one or more classes use the same interface 
                       it is referred to as Polymorephism.

                       Some difference between Abstract and Interface 

                       01. One class use or implements one or more interface but in Abstract class 
                            it is not possible.
                       02. In Interface all methods declare in public while Abstract class declare
                            Public,Private,Protected.
                       03. We can declare variable members in Interface, but in Abstract class we can't.
                       
                       04. we can,t make construct in interface but in Abstract class we can.
                             
                  */
         
?>