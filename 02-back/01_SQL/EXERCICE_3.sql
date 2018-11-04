-- Lister tous les salariés né avant 2000 :
SELECT first_name, last_name FROM employees WHERE birth_date <= ' 2000-01-01' ;
-- Lister tous les departements :
 SELECT dept_name FROM departments;
-- Lister tous les salariés avec un salaire entre 40000-55000 :
SELECT last_name, first_name FROM employees INNER JOIN salaries  ON employees.emp_no = salaries.emp_no WHERE salary BETWEEN 40000 AND 55000;
-- Lister tous les salariée  avec un nom commençanty par la lettre "a" :
SELECT first_name, last_name FROM employees WHERE last_name LIKE'a%';
-- lister toutes les salariés :
SELECT first_name, last_name FROM employees WHERE gender LIKE 'F';
SELECT first_name, last_name FROM employees WHERE gender = 'F';
-- Lister tous les salariés entrer dans l'entreprise avant le 01 janvier 1980 :
 SELECT last_name, first_name FROM employees WHERE hire_date <='1980-01-01';
 -- AFFIcher toute les salariées embauché aven 1980-01-01 :
 SELECT last_name, first_name FROM employees WHERE gender ='F' AND hire_date <='1980-01-01';
-- Supprimer tous les salariés en CDI :
DELETE dept_emp FROM dept_emp LEFT JOIN employees ON (dept_emp.emp_no = employees.emp_no) WHERE  dept_emp.to_date = '9999-01-01';
-- Afficher salariés pour chaque département(pas de doublon):
SELECT DISTINCT first_name, last_name, dept_name FROM employees AS e, departments AS d, dept_emp AS p WHERE e.emp_no = p.emp_no AND d.dept_no = p.dept_no;
-- Afficher manager pour chaque département (pas de doublon) :
SELECT DISTINCT first_name, last_name FROM employees AS e, departments AS d, dept_manager AS m WHERE e.emp_no = m.emp_no AND d.dept_no = m.dept_no;
-- Afficher les titres(pas de doublon):
SELECT DISTINCT title FROM titles;
